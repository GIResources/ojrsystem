<script type="text/javascript">
var loadFile = function(event){
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>


<tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img id="output" width="110" height="99" /></td>
  <input type="hidden" name="MAX_FILE_SIZE" size="500000" /><br />
<td><input type="file" name="pix" accept="image/*" onchange="loadFile(event)" size="50" /><br /></td>
</tr>
<tr><td><font color="#003366">Select Picture</font><br /></td>
<td><div id="normal" align="left">&nbsp;</div></td>
</tr>
<tr><td><div id="normal" align="left"><?php echo date("M j, Y - g:i"); ?></td>
<td><input type="hidden" name="dates" id="date" value="<?php echo date("M j, Y - g:i"); ?>" size="20" /></div></td>
<div id="normal" align="left">&nbsp;</div>
</tr>
