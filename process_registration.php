<?php
// process_registration.php

// Set headers to prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $country = htmlspecialchars($_POST['country']);
    $course = htmlspecialchars($_POST['course']);
    $student_age = htmlspecialchars($_POST['student_age']);
    
    // Get current date and time
    $registration_date = date('Y-m-d H:i:s');
    
    // Create data array
    $data = [
        $fullname,
        $email,
        $phone,
        $country,
        $course,
        $student_age,
        $registration_date
    ];
    
    // CSV file path
    $csv_file = 'registrations.csv';
    
    // Check if file exists, if not create headers
    if (!file_exists($csv_file)) {
        $headers = [
            'Full Name',
            'Email',
            'WhatsApp Number',
            'Country',
            'Course',
            'Student Age',
            'Registration Date'
        ];
        $file = fopen($csv_file, 'w');
        fputcsv($file, $headers);
        fclose($file);
    }
    
    // Append data to CSV
    $file = fopen($csv_file, 'a');
    fputcsv($file, $data);
    fclose($file);
    
    // Redirect to success page
    header('Location: registration.php?success=true');
    exit();
} else {
    // If someone tries to access this page directly
    header('Location: registration.php');
    exit();
}
?>