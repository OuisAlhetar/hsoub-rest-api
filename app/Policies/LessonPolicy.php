<?php

namespace App\Policies;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LessonPolicy
{
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool
  {
    return false;
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Lesson $lesson): bool
  {
    return false;
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool
  {
    return false;
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Lesson $lesson)
  {
    return $user->id === $lesson->user_id || $user->role == "admin"
      ? Response::allow()
      : Response::deny('You dont have permission to this action');
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Lesson $lesson)
  {
    return $user->id === $lesson->user_id || $user->role == "admin"
      ? Response::allow()
      : Response::deny('You dont have permission to this action');
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Lesson $lesson): bool
  {
    return false;
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Lesson $lesson): bool
  {
    return false;
  }
}
