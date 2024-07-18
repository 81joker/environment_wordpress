<?php
/* Template Name: About Us Template */
get_header();
?>
<?php 
    while( have_posts() ):
        the_post();
    // pageBanner();
    get_template_part( 'parts/content', 'breadcrumb' );

?>
<button class="add-new-field-btn">Add New Field</button>

<div class="acf-field-group">
  <!-- Existing ACF fields will be displayed here -->
</div>

<script>
document.querySelector('.add-new-field-btn').addEventListener('click', () => {
  const fieldGroupContainer = document.querySelector('.acf-field-group');

  // Create a new field HTML element
  const newField = document.createElement('div');
  newField.classList.add('acf-field');

  // Add the field label
  const fieldLabel = document.createElement('label');
  fieldLabel.textContent = 'New Field';
  newField.appendChild(fieldLabel);

  // Add the field input
  const fieldInput = document.createElement('input');
  fieldInput.type = 'text';
  fieldInput.name = 'new_field';
  fieldInput.classList.add('acf-input');
  newField.appendChild(fieldInput);

  // Append the new field to the field group container
  fieldGroupContainer.appendChild(newField);
});
</script>


<?php endwhile; ?>
<?php
get_footer();
?>
