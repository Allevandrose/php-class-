<!-- Abstract Classes

Description
An abstract class is a class that cannot be instantiated on its own. It serves as a blueprint for other classes. Abstract classes can contain both abstract methods (methods without a body) and concrete methods (fully defined methods).

 When to Use
- To define a common interface for a group of related classes.
- To provide a base functionality that can be shared while enforcing certain methods to be implemented in derived classes. -->

<!-- Example -->
 <?php
abstract class SchoolMember {
    // Abstract method
    abstract public function getRole(); // Change from protected to public

    // Concrete method
    public function attendMeeting() {
        echo "Attending a school meeting...\n";
    }
}

class Teacher extends SchoolMember {
    public function getRole() { // Change from protected to public
        return "Teacher teaching students<br/>";
    }
}

class Student extends SchoolMember {
    public function getRole() { // Change from protected to public
        return "Students learning from teachers\n";
    }
}

// Usage
$teacher = new Teacher();
echo $teacher->getRole(); // Outputs: Teaching students
$student = new Student();
echo $student->getRole(); // Outputs: Learning from teachers
?>

<!-- This code showcases the use of an abstract class to define a template for related classes in PHP. The SchoolMember class is abstract, meaning it cannot be used directly. It acts as a blueprint for other classes like Teacher and Student by enforcing them to implement a specific method called getRole().

Abstract Class (SchoolMember):

Defines a method getRole() that every child class must implement.
Also has a shared method attendMeeting() that any subclass can use directly.
Child Classes (Teacher and Student):

Both classes extend SchoolMember and must define their own versions of getRole().
Teacher describes their role as "Teaching students."
Student describes their role as "Learning from teachers."
Usage:

When creating a Teacher or Student object and calling getRole(), the program outputs a unique message for each type of school member.
 -->




