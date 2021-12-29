<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    protected $course;
    
    public function __construct(Course $course)
    {
        $this->course = $course;
    }
    
    public function getAllCourses()
    {
        return $this->course->get();
    }

    public function store(array $data)
    {
        return $this->course->create($data);
    }

    public function getCourseByUuid(string $id)
    {
        return $this->course->where('uuid',$id)->firstOrFail();
    }

    public function deleteCourseByUuid(string $id)
    {
        $course = $this->getCourseByUuid($id);

        return $course->delete();
    }

    public function updateCourse(array $data, string $id)
    {
        $course = $this->getCourseByUuid($id);

        return $course->update($data);
    }
}