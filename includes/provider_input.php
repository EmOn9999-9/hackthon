<?php
// Read and validate the provider form. Returns [$values, $errors, $photoPath].
function read_provider_form(): array
{
    $values = [
        'category' => $_POST['category'] ?? '',
        'phone'    => trim($_POST['phone'] ?? ''),
        'bio'      => trim($_POST['bio'] ?? ''),
    ];
    $errors = [];
    if (!isset(CATEGORIES[$values['category']])) {
        $errors[] = 'Please choose the service you offer.';
    }
    if (!preg_match('/^\+?[0-9 \-]{7,20}$/', $values['phone'])) {
        $errors[] = 'Please enter a valid phone number.';
    }
    if (mb_strlen($values['bio']) < 20) {
        $errors[] = 'Please write at least 20 characters about your work.';
    }
    $photo = null;
    if (!$errors) {
        try {
            $photo = save_photo_upload('photo');
        } catch (RuntimeException $ex) {
            $errors[] = $ex->getMessage();
        }
    }
    return [$values, $errors, $photo];
}
