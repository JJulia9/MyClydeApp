<?php
      $students = $conn->prepare('SELECT 
      s.student_num, 
      s.firstname,
      s.surname,
      s.email,
      c.name
    
    FROM student s
    INNER JOIN course c ON s.fk_course = c.course_id



      ');
      // run the query
      $students->execute();
      // store the results
      $students->store_result();
      // create variables for the results (these should be in the same order as the columns in the query)
      $students->bind_result($studentNumbers, $firstnames, $surnames, $emails, $course);
  
    ?>
