<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <main class="container">
      <div class="row text-center">
        <div class="col-12">
        </div>
    </div>
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
          <?php echo $data["title"]; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <main class="container">
      <div class="row text-center">
        <div class="col-12">
          <table>
  <thead>
    <th>id</th>
    <th>Student Number</th>
    <th>First Name</th>
    <th>Tussenvoegsel</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Telefoonnummer</th>
    <th>Klas</th>
    <th>Delete</th>
  </thead>
  <tbody>
    <?=$data['studentrows']?>
  </tbody>
</table>
        </div>


<a href="<?=URLROOT;?>/homepages/index">terug</a>
