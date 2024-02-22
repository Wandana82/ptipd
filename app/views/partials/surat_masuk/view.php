<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("surat_masuk/add");
$can_edit = ACL::is_allowed("surat_masuk/edit");
$can_view = ACL::is_allowed("surat_masuk/view");
$can_delete = ACL::is_allowed("surat_masuk/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Surat Masuk</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id_surat']) ? urlencode($data['id_surat']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id_surat">
                                        <th class="title"> Id Surat: </th>
                                        <td class="value"> <?php echo $data['id_surat']; ?></td>
                                    </tr>
                                    <tr  class="td-Nomor_Surat">
                                        <th class="title"> Nomor Surat: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['Nomor_Surat']; ?>" 
                                                data-pk="<?php echo $data['id_surat'] ?>" 
                                                data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id_surat'])); ?>" 
                                                data-name="Nomor_Surat" 
                                                data-title="Enter Nomor Surat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['Nomor_Surat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-Tanggal_Surat">
                                        <th class="title"> Tanggal Surat: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['Tanggal_Surat']; ?>" 
                                                data-pk="<?php echo $data['id_surat'] ?>" 
                                                data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id_surat'])); ?>" 
                                                data-name="Tanggal_Surat" 
                                                data-title="Enter Tanggal Surat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['Tanggal_Surat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-Perihal_Surat">
                                        <th class="title"> Perihal Surat: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['Perihal_Surat']; ?>" 
                                                data-pk="<?php echo $data['id_surat'] ?>" 
                                                data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id_surat'])); ?>" 
                                                data-name="Perihal_Surat" 
                                                data-title="Enter Perihal Surat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['Perihal_Surat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-Tanggal_Terima">
                                        <th class="title"> Tanggal Terima: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['Tanggal_Terima']; ?>" 
                                                data-pk="<?php echo $data['id_surat'] ?>" 
                                                data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id_surat'])); ?>" 
                                                data-name="Tanggal_Terima" 
                                                data-title="Enter Tanggal Terima" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['Tanggal_Terima']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-File_Surat">
                                        <th class="title"> File Surat: </th>
                                        <td class="value"><?php Html :: page_link_file($data['File_Surat']); ?></td>
                                    </tr>
                                    <tr  class="td-Diterima_oleh">
                                        <th class="title"> Diterima Oleh: </th>
                                        <td class="value">
                                            <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("user/view/" . urlencode($data['Diterima_oleh'])) ?>">
                                                <i class="fa fa-eye"></i> <?php echo $data['user_Nama_Pengguna'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-Asal_Surat">
                                        <th class="title"> Asal Surat: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['Asal_Surat']; ?>" 
                                                data-pk="<?php echo $data['id_surat'] ?>" 
                                                data-url="<?php print_link("surat_masuk/editfield/" . urlencode($data['id_surat'])); ?>" 
                                                data-name="Asal_Surat" 
                                                data-title="Enter Asal Surat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['Asal_Surat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("surat_masuk/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("surat_masuk/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                                <?php } ?>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>