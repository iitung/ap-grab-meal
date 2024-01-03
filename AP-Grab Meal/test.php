<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title> <?php echo $pageTitle; ?> </title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="my_account.css">
  </head>
  <body>
    <form>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">First name</label>
        <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationDefault02">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationDefaultUsername">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
          </div>
          <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">City</label>
        <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">State</label>
        <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Zip</label>
        <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
