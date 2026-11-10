<?php
// Shared form for creating / editing a provider listing.
// Expects: $values (category, phone, bio), $errors (array), $submitLabel.
?>
<form method="post" enctype="multipart/form-data" class="space-y-4">
    <?= csrf_field() ?>
    <input type="hidden" name="action" value="update_profile">
    <?php if ($errors): ?>
        <div class="text-red-600 text-sm space-y-1">
            <?php foreach ($errors as $error): ?><p><?= e($error) ?></p><?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div>
        <label for="category" class="block text-sm font-medium text-gray-700">Service you offer</label>
        <select id="category" name="category" class="w-full px-4 py-3 border rounded-lg" required>
            <option value="">Choose a service…</option>
            <?php foreach (CATEGORIES as $slug => $c): ?>
                <option value="<?= e($slug) ?>" <?= $values['category'] === $slug ? 'selected' : '' ?>><?= e($c['label']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700">Phone number</label>
        <input type="tel" id="phone" name="phone" value="<?= e($values['phone']) ?>" placeholder="+977 98XXXXXXXX" class="w-full px-4 py-3 border rounded-lg" required>
    </div>
    <div>
        <label for="bio" class="block text-sm font-medium text-gray-700">About you and your work</label>
        <textarea id="bio" name="bio" rows="4" class="w-full px-4 py-3 border rounded-lg" required><?= e($values['bio']) ?></textarea>
    </div>
    <div>
        <label for="photo" class="block text-sm font-medium text-gray-700">Profile photo (JPG, PNG or WebP, max 2 MB)</label>
        <input type="file" id="photo" name="photo" accept="image/jpeg,image/png,image/webp" class="w-full">
    </div>
    <button type="submit" class="bg-[#497D74] text-white px-6 py-2 rounded-full hover:bg-[#3a645d]"><?= e($submitLabel) ?></button>
</form>
