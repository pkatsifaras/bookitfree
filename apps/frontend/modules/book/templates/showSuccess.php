
<table class="table-bordered">
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $bookit_book->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $bookit_book->getBookitCategory()->getName() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $bookit_book->getTitle() ?></td>
    </tr>
    <tr>
      <th>Secondary title:</th>
      <td><?php echo $bookit_book->getSecondaryTitle() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $bookit_book->getAuthor() ?></td>
    </tr>
    <tr>
      <th>Short description:</th>
      <td><?php echo $bookit_book->getShortDescription() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $bookit_book->getDescription() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td>
        <img style="width: 150px; height: 200px;" src="/uploads/books/<?php echo $bookit_book->getLogo() ?>" alt="<?php echo $bookit_book->getTitle() ?> logo"/>
      </td>
    </tr>
    <tr>
      <th>Isbn:</th>
      <td><?php echo $bookit_book->getIsbn() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $bookit_book->getUrl() ?></td>
    </tr>
    <tr>
      <th>Pages:</th>
      <td><?php echo $bookit_book->getPages() ?></td>
    </tr>
    <tr>
      <th>Dimensions:</th>
      <td><?php echo $bookit_book->getDimensions() ?></td>
    </tr>
    <tr>
      <th>Weight:</th>
      <td><?php echo $bookit_book->getWeight() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $bookit_book->getPosition() ?></td>
    </tr>
    <tr>
      <th>Location:</th>
      <td><?php echo $bookit_book->getLocation() ?></td>
    </tr>
    <tr>
      <th>How to apply:</th>
      <td><?php echo $bookit_book->getHowToApply() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $bookit_book->getIsPublic() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $bookit_book->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $bookit_book->getEmail() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $bookit_book->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $bookit_book->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $bookit_book->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('book/edit?id=' . $bookit_book->getId() . $bookit_book->getToken() ) ?>"><button class="btn-large btn-primary">Edit</button></a>
&nbsp;
<a href="<?php echo url_for('book/index') ?>"><button class="btn-large btn-primary">Back to List</button></a>
