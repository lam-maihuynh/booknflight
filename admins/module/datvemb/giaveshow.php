<?php
$Sb = new Giave();
$page = getIndex("page", 1);

$data = $Sb->getall_page($page);
$page_count = $Sb->count_page();

?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
				
						<table>
							
							<thead>
								<tr>
								   <th>Mã chuyến bay</th>
								   <th>Mã hạng ghế</th>
								   <th>Giá vé</th>
								   <th>Tùy chọn</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="4">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                            <?php
											for($i=1; $i<= $page_count; $i++)
											{ $c =" number ";
											  if ($i==$page) $c .=" current ";?>
											<a href="index.php?mod=datvemb&group=giave&page=<?php echo $i;?>" class="<?php echo $c;?>" 
                                            	title="<?php echo $i;?>"><?php echo $i;?></a>
											<?php
											}
											?>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
                            <?php 
							foreach( $data as $r)
							{?>
								<tr>
									<td><?php echo $r["MaChuyenBay"];?></td>
                                    <td><?php echo $r["MaHangGhe"];?></td>
									<td><?php echo $r["GiaVe"];?></td>
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=datvemb&group=giave&id=<?php echo $r["MaChuyenBay"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>&nbsp;&nbsp;
										 <a href="xulygiave.php?c=delete&id=<?php echo $r["MaChuyenBay"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->