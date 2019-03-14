{include file="header.tpl" title=AdminCafe}
<h1>Members</h1>
<form action="member.php" method="post">
        
         {if $id neq 0}
            <input type="hidden" name="members_id" value="{$user.members_id}">
          {/if}
          


    <div class="form-group">
      <label for="">First Name</label>
      <input type="text" value="{if isset($_REQUEST['edit'])}{$user.firstname}{/if}" class="form-control" name="firstname" id="" aria-describedby="emailHelpId" placeholder="Please Enter First Name" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Last Name</label>
      <input type="text" class="form-control" name="lastname" id="" aria-describedby="emailHelpId" placeholder="Please Enter Last Name" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Please Enter Last Name" required >
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Number</label>
      <input type="number" class="form-control" name="number" id="" aria-describedby="emailHelpId" placeholder="Please Enter Number" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" class="form-control" name="address" id="" aria-describedby="emailHelpId" placeholder="Please Enter User Name" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    {* <div class="form-group">
      <label for=""> Image</label>
      <input type="file" class="form-control" name="image" id="" aria-describedby="emailHelpId" required>
      <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div> *}
  
    <button type="submit" class="btn btn-primary">{if $id neq 0}Update{else}Create{/if}</button>
    </form>

    {if condition}
      
    {else}
      
    {/if}
    {* <div id="table_data">
</div> *}


<table width="550" border="border: 1px solid black">
  <tr>
    <th>S.N</th>
    <th>Firstname</th>
    <th>LastName</th> 
    <th>Email</th>
    <th>Number</th> 
    <th>Address</th>
    <th colspan="2">Action</th>
  </tr>
  {section name=i loop=$users }
  <tr>
    <td>{$smarty.section.i.rownum}</td>
    <td>{$users[i].firstname}</td>
    <td>{$users[i].lastname}</td>
    <td>{$users[i].email}</td>
    <td>{$users[i].number}</td>
    <td>{$users[i].address}</td>
    <td><a href="member.php?del={$users[i].members_id}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> |
     <a href="member.php?edit={$users[i].members_id}">Edit</a></td>
   </tr>
   {/section}
 </table>
{include file="footer.tpl"}
