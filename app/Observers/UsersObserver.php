<?php
namespace App\Observers;

use App\Users;

class UsersObserver
{
    
    /**
     * Listen to the Users creating event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function creating(Users $Users)
    {
        //code...
    }

     /**
     * Listen to the Users created event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function created(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users updating event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function updating(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users updated event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function updated(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users saving event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function saving(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users saved event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function saved(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users deleting event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function deleting(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users deleted event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function deleted(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users restoring event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function restoring(Users $Users)
    {
        //code...
    }

    /**
     * Listen to the Users restored event.
     *
     * @param  Users  $Users
     * @return void
     */
    public function restored(Users $Users)
    {
        //code...
    }
}