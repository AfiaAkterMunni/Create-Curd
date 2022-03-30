<?php

/** @var $pdo \PDO */
require_once "database.php";


$search = $_GET['search'] ?? '';
if($search)
{
  $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
  $statement->bindValue(':title', "%$search%");
}
else
{
  $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($products);
// echo '</pre>';
// test comment

?>

<?php include_once 'views/partials/header.php'?>

  <h1>Products CRUD (Create, Read, Update, Delete)</h1>
  <p>
    <a href="create.php" class="btn btn-success">Create Product</a>
  </p>
  <form>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search For Products" name="search" value="<?php echo $search?>">
      <button class="btn btn-outline-secondary" type="submit">Search</button>
    </div>
  </form>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) : ?>
        <tr>
          <th scope="row"><?php echo $i + 1 ?></th>
          <td>
            <img src="<?php echo $product['image']?>" alt="" class="image">
          </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
          <td>
            <a href="update.php?id=<?php echo $product['id']?>" class="btn btn-sm btn-outline-success">Edit</a>

            <form action="delete.php" method="post" style="display: inline-block">
              <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  
<?php include_once 'views/partials/footer.php'?>
