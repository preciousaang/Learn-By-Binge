<?php

namespace App\Observers;

use App\Course;
use Illuminate\Support\Facades\Storage;

class CourseObserver
{
    /**
     * Handle the course "created" event.
     *
     * @param  \App\Course  $course
     * @return void
     */
    public function created(Course $course)
    {
        //
    }

    /**
     * Handle the course "updated" event.
     *
     * @param  \App\Course  $course
     * @return void
     */
    public function updated(Course $course)
    {
        //
    }

    /**
     * Handle the course "deleted" event.
     *
     * @param  \App\Course  $course
     * @return void
     */
    public function deleted(Course $course)
    {
        //
    }

    /**
     * Handle the course "restored" event.
     *
     * @param  \App\Course  $course
     * @return void
     */
    public function restored(Course $course)
    {
        //
    }

    /**
     * Handle the course "force deleted" event.
     *
     * @param  \App\Course  $course
     * @return void
     */
    public function forceDeleted(Course $course)
    {
        //
    }


    /**
     * Handle the course "force deleting" event.
     *
     * @param  \App\Course  $course
     * @return void
     */

     public function deleting(Course $course){
        $collection = collect($course->files);
        $src = $collection->map(function($item, $key){return 'public/course-files/'. $item->src;});

        Storage::delete($src->all());

     }

}
