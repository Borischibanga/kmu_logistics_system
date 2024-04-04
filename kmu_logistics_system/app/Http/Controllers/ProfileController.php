use Illuminate\Support\Facades\Redirect;

/**
 * Update the user's profile information.
 */
public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();
    $user->fill($request->validated());

    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    $user->save();

    // Redirect based on user role
    if ($user->issuperAdmin()) {
        return Redirect::route('admin.dashboard')->with('status', 'profile-updated');
    } elseif ($user->isStudent()) {
        return Redirect::route('student.dashboard')->with('status', 'profile-updated');
    } else {
        return Redirect::route('driverofficer.dashboard')->with('status', 'profile-updated');
    }
}
