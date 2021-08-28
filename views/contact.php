<?php
/**
 * @var $model \app\models\ContactForm
 */
/**
 * @var $this \heliostat\core\View
 */

$this->title = 'Contact';
?>

<h1>Contact us</h1>
<?php
    $form = \heliostat\core\form\Form::begin('', 'post');
    echo $form->field($model, 'subject');
    echo $form->field($model, 'email');
    echo new \heliostat\core\form\TextAreaField($model, 'body');
?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php
    \heliostat\core\form\Form::end();
?>

