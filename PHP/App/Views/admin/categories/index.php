<div class="content-box-large">
  <div class="panel-heading">
    <div class="panel-title"><h3><?= $title;?></h3></div>
    <a href="/admin/categories/create"><button class="btn btn-primary pull-right"><span data-feather="plus"></span> Add New</button></a>
  </div>
</div>
<div class="table-responsive">
<?php if ($numRows): 
  echo $numRows; ?>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
      <th>#</th>
      <th>Category Name</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category):?>
      <tr>
        <td><?php echo $category->id?></td>
        <td><?php echo $category->name?></td>
        <td>
          <button class="btn btn-default"><span data-feather="eye"></span> View</button>
          <a href="/admin/categories/edit/<?=$category->id?>"><button class="btn btn-primary"><span data-feather="edit"></span> Edit</button></a>
          <a href="/admin/categories/delete/<?=$category->id?>"><button class="btn btn-danger"><span data-feather="delete"></span> Delete</button></a>
        </td>
      </tr>
    <?php endforeach;?>
    
    </tbody>
  </table>
  <?php else:?>
    <h3>Not Catehories yet...</h3>
<?php endif; ?>
</div>
