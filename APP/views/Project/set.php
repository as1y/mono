<!-- Table components -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Table components</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        Table below contains different examples of components that can be used in the table: form components, interface components, buttons, list of actions etc. All of them are adapted for different cases, such as multiple elements in the same table cell. These components support all available sizes and styles. Charts are also supported, but in certain sizes.
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-lg">
            <tbody>
            <tr class="table-active">
                <th colspan="3">Control buttons and icons</th>
            </tr>
            <tr>
                <td class="wmin-md-300">Control links</td>
                <td class="wmin-md-350">
                    <div class="list-icons">
                        <a href="#" class="list-icons-item"><i class="icon-pencil7"></i></a>
                        <a href="#" class="list-icons-item"><i class="icon-trash"></i></a>
                        <a href="#" class="list-icons-item"><i class="icon-cog6"></i></a>
                    </div>
                </td>
                <td>Basic table row control buttons. These links appear as a list of links with icons</td>
            </tr>
            <tr>
                <td>Colored links</td>
                <td>
                    <div class="list-icons">
                        <a href="#" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                        <a href="#" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                        <a href="#" class="list-icons-item text-teal-600"><i class="icon-cog6"></i></a>
                    </div>
                </td>
                <td>Control links support different colors: default Bootstrap contextual colors and custom text colors from the custom color system. To use these colors add <code>.text-*</code> class to the parent <code>&lt;li></code> element</td>
            </tr>
            <tr>
                <td>Links with tooltip</td>
                <td>
                    <div class="list-icons">
                        <a href="#" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
                            <i class="icon-pencil7"></i>
                        </a>
                        <a href="#" class="list-icons-item" data-popup="tooltip" title="Remove" data-container="body">
                            <i class="icon-trash"></i>
                        </a>
                        <a href="#" class="list-icons-item" data-popup="tooltip" title="Options" data-container="body">
                            <i class="icon-cog6"></i>
                        </a>
                    </div>
                </td>
                <td>Table row control links with default Bootstrap tooltip triggered on <code>hover</code></td>
            </tr>
            <tr>
                <td>Links with modals</td>
                <td>
                    <div class="list-icons">
                        <a href="#" class="list-icons-item" data-toggle="modal" data-target="#edit_modal">
                            <i class="icon-pencil7"></i>
                        </a>
                        <a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal">
                            <i class="icon-trash"></i>
                        </a>
                        <a href="#" class="list-icons-item" data-toggle="modal" data-target="#options_modal">
                            <i class="icon-cog6"></i>
                        </a>
                    </div>
                </td>
                <td>These control links launch <code>modals</code> with table row options. Click each icon to see it in action</td>
            </tr>
            <tr>
                <td>Links with dropdown</td>
                <td>
                    <div class="list-icons">
                        <a href="#" class="list-icons-item"><i class="icon-pencil7"></i></a>
                        <a href="#" class="list-icons-item"><i class="icon-trash"></i></a>
                        <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog6"></i></a>

                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to DOC</a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>Control links with optional <code>dropdown</code> menu appended to one of the links</td>
            </tr>
            <tr>
                <td>Options dropdown</td>
                <td>
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog6"></i></a>

                            <div class="dropdown-menu">
                                <div class="dropdown-header">Options</div>
                                <a href="#" class="dropdown-item"><i class="icon-pencil7"></i>Edit entry</a>
                                <a href="#" class="dropdown-item"><i class="icon-bin"></i>Remove entry</a>
                                <div class="dropdown-header">Export</div>
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>Here all table row controls are moved to one <code>general dropdown</code> menu, that is appended to 1 link</td>
            </tr>
            <tr>
                <td>Links with text</td>
                <td>
                    <ul class="list-inline mb-0">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle text-default" data-toggle="dropdown">Options</a>

                            <ul class="dropdown-menu">
                                <div class="dropdown-header">Options</div>
                                <a href="#" class="dropdown-item"><i class="icon-pencil7"></i>Edit entry</a>
                                <a href="#" class="dropdown-item"><i class="icon-bin"></i>Remove entry</a>
                                <div class="dropdown-header">Export</div>
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                            </ul>
                        </li>
                    </ul>
                </td>
                <td>Control link with text and icon. Text can be placed <code>before</code> icon or <code>after</code> it. Optional <code>.mr-2</code> class adds extra right margin to the icon</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">Badges</th>
            </tr>
            <tr>
                <td>Badge</td>
                <td>
                    <span class="badge badge-danger">In progress</span>
                    <span class="badge badge-flat border-success text-success-600 ml-2">Done</span>
                </td>
                <td>Basic Bootstrap <code>badge</code>. Supports default contextual colors and custom colors from the color system</td>
            </tr>
            <tr>
                <td>Badge pill</td>
                <td>
                    <span class="badge badge-primary badge-pill">92</span>
                    <span class="badge badge-flat border-danger text-danger-600 badge-pill ml-2">190</span>
                </td>
                <td>Basic Bootstrap <code>badge pill</code> - badges with rounded corners</td>
            </tr>
            <tr>
                <td>Linked badge</td>
                <td>
                    <a href="#" class="badge badge-warning">Click me</a>
                </td>
                <td>Liked badge. To use label as a link, add <code>.badge</code> class to the link element</td>
            </tr>
            <tr>
                <td>Linked badge pill</td>
                <td>
                    <a href="#" class="badge bg-dark badge-pill">59</a>
                </td>
                <td>Liked badge pill. To use badge as a link, add <code>.badge-pill</code> class to the link element</td>
            </tr>
            <tr>
                <td>Badge with dropdown</td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="badge bg-teal dropdown-toggle" data-toggle="dropdown">Priority</a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <span class="badge badge-mark bg-danger border-danger align-self-center mr-2"></span>
                                High priority
                            </a>
                            <a href="#" class="dropdown-item">
                                <span class="badge badge-mark bg-info border-info align-self-center mr-2"></span>
                                Normal priority
                            </a>
                            <a href="#" class="dropdown-item">
                                <span class="badge badge-mark bg-primary border-primary align-self-center mr-2"></span>
                                Low priority
                            </a>
                        </ul>
                    </div>
                </td>
                <td>Badge with dropdown menu</td>
            </tr>
            <tr>
                <td>Badge pill with dropdown</td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="badge bg-indigo-400 badge-pill dropdown-toggle" data-toggle="dropdown">50%</a>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="icon-arrow-up12 text-success"></i> Increase to 100%</a>
                            <a href="#" class="dropdown-item"><i class="icon-arrow-up12 text-success"></i> Increase to 90%</a>
                            <a href="#" class="dropdown-item"><i class="icon-arrow-up12 text-success"></i> Increase to 70%</a>
                            <a href="#" class="dropdown-item"><i class="icon-arrow-down12 text-danger"></i> Decrease to 30%</a>
                            <a href="#" class="dropdown-item"><i class="icon-arrow-down12 text-danger"></i> Decrease to 10%</a>
                            <a href="#" class="dropdown-item"><i class="icon-arrow-down12 text-danger"></i> Decrease to 0%</a>
                        </div>
                    </div>
                </td>
                <td>Badge pill with dropdown menu</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">Styled checkboxes</th>
            </tr>
            <tr>
                <td>Styled checkbox</td>
                <td>
                    <input type="checkbox" class="form-input-styled" checked data-fouc>
                </td>
                <td>Single styled checkbox without label. Does not require <code>.form-check</code> wrapper</td>
            </tr>
            <tr>
                <td>Left position</td>
                <td>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-input-styled" checked data-fouc>
                            Left styled checkbox
                        </label>
                    </div>
                </td>
                <td>Styled checkbox with label, <code>left</code> position</td>
            </tr>
            <tr>
                <td>Right position</td>
                <td>
                    <div class="form-check form-check-inline form-check-right">
                        <label class="form-check-label">
                            Right styled checkbox
                            <input type="checkbox" class="form-input-styled" checked data-fouc>
                        </label>
                    </div>
                </td>
                <td>Styled checkbox with label, <code>right</code> position</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">Styled radios</th>
            </tr>
            <tr>
                <td>Styled radio</td>
                <td>
                    <input type="radio" class="form-input-styled" checked data-fouc>
                </td>
                <td>Single styled radio without label. Does not require <code>.form-check</code> wrapper</td>
            </tr>
            <tr>
                <td>Left position</td>
                <td>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="radio-styled" class="form-input-styled" checked data-fouc>
                            Left styled radio
                        </label>
                    </div>
                </td>
                <td>Styled radio with label, <code>left</code> position</td>
            </tr>
            <tr>
                <td>Right position</td>
                <td>
                    <div class="form-check form-check-inline form-check-right">
                        <label class="form-check-label">
                            Right styled radio
                            <input type="radio" name="radio-styled" class="form-input-styled" data-fouc>
                        </label>
                    </div>
                </td>
                <td>Styled radio with label, <code>right</code> position</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">Default checkboxes</th>
            </tr>
            <tr>
                <td>Default checkbox</td>
                <td>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input position-static" checked>
                    </div>
                </td>
                <td>Single default checkbox without label. Requires <code>.position-static</code> class</td>
            </tr>
            <tr>
                <td>Left position</td>
                <td>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" checked>
                            Left default checkbox
                        </label>
                    </div>
                </td>
                <td>Default checkbox with label, <code>left</code> position</td>
            </tr>
            <tr>
                <td>Right position</td>
                <td>
                    <div class="form-check form-check-inline form-check-right">
                        <label class="form-check-label">
                            Right default checkbox
                            <input type="checkbox" class="form-check-input" checked>
                        </label>
                    </div>
                </td>
                <td>Default checkbox with label, <code>right</code> position</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">Default radios</th>
            </tr>
            <tr>
                <td>Default radio</td>
                <td>
                    <div class="form-check">
                        <input type="radio" class="form-check-input position-static" checked>
                    </div>
                </td>
                <td>Single default radio without label. Requires <code>.position-static</code> element</td>
            </tr>
            <tr>
                <td>Left position</td>
                <td>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="radio-default" checked>
                            Left default radio
                        </label>
                    </div>
                </td>
                <td>Default radio with label, <code>left</code> position</td>
            </tr>
            <tr>
                <td>Right position</td>
                <td>
                    <div class="form-check form-check-inline form-check-right">
                        <label class="form-check-label">
                            Right default radio
                            <input type="radio" class="form-check-input" name="radio-default">
                        </label>
                    </div>
                </td>
                <td>Default radio with label, <code>right</code> position</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">Switchery toggles</th>
            </tr>
            <tr>
                <td>Switchery toggle</td>
                <td>
                    <input type="checkbox" class="form-input-switchery" checked data-fouc>
                </td>
                <td>Single switchery checkbox</td>
            </tr>
            <tr>
                <td>Left position</td>
                <td>
                    <div class="form-check form-check-inline form-check-switchery">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-input-switchery" checked data-fouc>
                            Left switch
                        </label>
                    </div>
                </td>
                <td>Switchery checkbox with label, <code>left</code> position</td>
            </tr>
            <tr>
                <td>Right position</td>
                <td>
                    <div class="form-check form-check-inline form-check-right form-check-switchery">
                        <label class="form-check-label">
                            Right switch
                            <input type="checkbox" class="form-input-switchery" checked data-fouc>
                        </label>
                    </div>
                </td>
                <td>Switchery checkbox with label, <code>right</code> position</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">File uploaders</th>
            </tr>
            <tr>
                <td>Default upload</td>
                <td>
                    <input type="file" class="form-control h-auto">
                </td>
                <td>Default single file uploader</td>
            </tr>
            <tr>
                <td>Styled uploader</td>
                <td>
                    <input type="file" class="form-input-styled" data-fouc>
                </td>
                <td>Single file uploader, styled with <code>uniform.js</code> plugin</td>
            </tr>
            <tr>
                <td>Multiple uploader</td>
                <td>
                    <input type="file" class="bootstrap-uploader" data-fouc>
                </td>
                <td>Multiple file uploader, using <code>file_input.js</code> plugin</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">Inputs and selects</th>
            </tr>
            <tr>
                <td>Input field</td>
                <td>
                    <input type="text" class="form-control" placeholder="Text input">
                </td>
                <td>Basic input field with <code>.form-control</code> class. Supports all available sizes</td>
            </tr>
            <tr>
                <td>Input group</td>
                <td>
                    <div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<i class="icon-menu6"></i>
												</span>
											</span>
                        <input type="text" class="form-control" placeholder="Input group">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"><i class="icon-menu7"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a href="#" class="dropdown-item">One more line</a>
                            </div>
                        </div>
                    </div>
                </td>
                <td>Extended form controls with appended and prepended text of buttons</td>
            </tr>
            <tr>
                <td>Spinner</td>
                <td>
                    <input type="text" value="20" class="form-control form-control-touchspin">
                </td>
                <td>Basic implementation of spinners based on <code>bootspin.js</code> library</td>
            </tr>
            <tr>
                <td>Default select</td>
                <td>
                    <select name="select" class="form-control">
                        <option value="opt1">Basic select box</option>
                        <option value="opt2">Option 2</option>
                        <option value="opt3">Option 3</option>
                        <option value="opt4">Option 4</option>
                        <option value="opt5">Option 5</option>
                        <option value="opt6">Option 6</option>
                        <option value="opt7">Option 7</option>
                        <option value="opt8">Option 8</option>
                    </select>
                </td>
                <td>Default simple selects with <code>.form-control</code> class. Supports all available sizes</td>
            </tr>
            <tr>
                <td>Styled select</td>
                <td>
                    <select name="select" class="form-control form-input-styled" data-fouc>
                        <option value="opt1">Styled select box</option>
                        <option value="opt2">Option 2</option>
                        <option value="opt3">Option 3</option>
                        <option value="opt4">Option 4</option>
                        <option value="opt5">Option 5</option>
                        <option value="opt6">Option 6</option>
                        <option value="opt7">Option 7</option>
                        <option value="opt8">Option 8</option>
                    </select>
                </td>
                <td>Single styled select based on <code>uniform.js</code> library</td>
            </tr>
            <tr>
                <td>Select2 single</td>
                <td>
                    <select name="select" class="form-control form-control-select2" data-fouc>
                        <option value="opt1">Select2 select</option>
                        <option value="opt2">Option 2</option>
                        <option value="opt3">Option 3</option>
                        <option value="opt4">Option 4</option>
                        <option value="opt5">Option 5</option>
                        <option value="opt6">Option 6</option>
                        <option value="opt7">Option 7</option>
                        <option value="opt8">Option 8</option>
                    </select>
                </td>
                <td>Single select based on <code>select2.js</code> library</td>
            </tr>
            <tr>
                <td>Select2 multiple</td>
                <td>
                    <select name="select" multiple="multiple" class="form-control form-control-select2" data-fouc>
                        <option value="opt1" selected>Option 1</option>
                        <option value="opt2" selected>Option 2</option>
                        <option value="opt3">Option 3</option>
                        <option value="opt4">Option 4</option>
                        <option value="opt5">Option 5</option>
                        <option value="opt6">Option 6</option>
                        <option value="opt7">Option 7</option>
                        <option value="opt8">Option 8</option>
                    </select>
                </td>
                <td>Multiple select based on <code>select2.js</code> library</td>
            </tr>
            <tr>
                <td>Multiselect</td>
                <td>
                    <select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
                        <option value="opt1">Option 1</option>
                        <option value="opt2">Option 2</option>
                        <option value="opt3">Option 3</option>
                        <option value="opt4">Option 4</option>
                        <option value="opt5">Option 5</option>
                        <option value="opt6">Option 6</option>
                        <option value="opt7">Option 7</option>
                        <option value="opt8">Option 8</option>
                    </select>
                </td>
                <td>Multiple select with checkboxes based on <code>multiselect.js</code> library</td>
            </tr>

            <tr class="table-border-double table-active">
                <th colspan="3">UI components</th>
            </tr>
            <tr>
                <td>Context menu</td>
                <td data-toggle="context" data-target=".context-data-menu">
                    Right click on this cell

                    <div class="context-data-menu">
                        <div class="dropdown-menu">
                            <div class="dropdown-header">Options</div>
                            <a href="#" class="dropdown-item"><i class="icon-pencil7"></i>Edit entry</a>
                            <a href="#" class="dropdown-item"><i class="icon-bin"></i>Remove entry</a>
                            <div class="dropdown-header">Export</div>
                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                        </div>
                    </div>
                </td>
                <td>Basic implementation of a <code>context menu</code> attached to the table cell</td>
            </tr>
            <tr>
                <td>Button</td>
                <td>
                    <button type="button" class="btn btn-success">Basic button</button>
                </td>
                <td>Simple button, supports all sizes and colors</td>
            </tr>
            <tr>
                <td>Buttons with icon</td>
                <td>
                    <button type="button" class="btn btn-danger btn-icon"><i class="icon-menu7"></i></button>

                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-info btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <a href="#" class="dropdown-item">One more line</a>
                        </div>
                    </div>
                </td>
                <td>Simple button and button dropdowns with icon only, require <code>.btn-icon</code> class for padding correction</td>
            </tr>
            <tr>
                <td>Button dropdown</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Button dropdown</button>

                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <a href="#" class="dropdown-item">One more line</a>
                        </div>
                    </div>
                </td>
                <td>Button dropdown. Also supports segmented buttons and button toggles</td>
            </tr>
            <tr>
                <td>Progress bar</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-pink-400" style="width: 54%">
                            <span class="sr-only">54% Complete</span>
                        </div>
                    </div>
                </td>
                <td>Progress bar, supports all available color and sizing options</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- /table components -->




<div class="row">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">ОБЩАЯ ИНФОРМАЦИЯ <?=$company['name']?></h3>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr>
						<td><b>ID:</b></td>
						<td>
							# <span id="idc"><?=$company['id']?></span> 
							<?=camstatus($company['status'],$company['id'] )?>
						</td>
					</tr>
					<tr>
						<td><b>Название:</b></td>
						<td><?=$company['name']?></td>
					</tr>
					<tr>
						<td><b>ТИП:</b></td>
						<td><?=companytype($company['type'])?></td>
					</tr>

                    <tr>
                        <td><b>ОПЛАТА ЗА РЕЗУЛЬТАТ:</b></td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-xsmall" id="cfc"  value="<?=$company['cfc']?>">
                                        <span class="input-group-addon">РУБ</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>



					<?if(!empty($company['manager'])):?>
					<tr>
						<td><b>Ваш менеджер:</b></td>
						<td><?=$company['manager']?></td>
					</tr>
					<?endif;?>
					<tr>
						<td><b>ЛИМИТ:</b></td>
						<td>
							<div class="row">
								<div class="col-4">
									<div class="input-group">
										<span class="input-group-addon">В ДЕНЬ</span>
										<input type="text" class="form-control input-xsmall" id="daylimit" value="<?=$company['daylimit']?>">
									</div>
								</div>
							</div>
						</td>
					</tr>


					<tr>
						<td><b>Ограничение количества<br> операторов на проекте:</b></td>
						<td>
							<div class="row">
								<div class="col-4">
									<div class="input-group">
										<input type="text" class="form-control input-xsmall" id="count_operator" placeholder="по умолчанию: 20" value="<?=$company['countoperator']?>">
									</div>
								</div>
							</div>
						</td>
					</tr>



					<tr>
						<td><b>ДОПУСК ОПЕРАТОРОВ НА ПРОЕКТ:</b></td>
						<td>
							<label class="css-control css-control-danger css-radio">
								<input type="radio" class="css-control-input" name="moder" value="rumgo" <?=$company['moder'] == "rumgo" ? 'checked' : '';?>>
								<span class="css-control-indicator"></span> 
								<?=NAME?> (рекомендуется)
							</label>
							<label class="css-control css-control-danger css-radio">
								<input type="radio" class="css-control-input" name="moder" value="self"  <?=$company['moder'] == "self" ? 'checked' : '';?> >
								<span class="css-control-indicator"></span> 
								Самостоятельно
							</label>
							<label class="css-control css-control-danger css-radio">
								<input type="radio" class="css-control-input" name="moder" value="closed"  <?=$company['moder'] == "closed" ? 'checked' : '';?> >
								<span class="css-control-indicator"></span> 
								Набор закрыт
							</label>
						</td>
					</tr>
					<tr>
						<td><b>ДНИ НЕДЕЛИ:</b></td>
						<td>
							<?$dni= json_decode($company['dni'],TRUE);?>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="PN" name="PN" <?=$dni['PN'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ПН</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="VT" name="VT" <?=$dni['VT'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ВТ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="SR" name="SR" <?=$dni['SR'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">СР</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="CHT" name="CHT" <?=$dni['CHT'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ЧТ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="PT" name="PT" <?=$dni['PT'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ПТ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="SB" name="SB" <?=$dni['SB'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">СБ</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="VS" name="VS" <?=$dni['VS'] == "on" ? 'checked' : '';?>>
								<span class="custom-control-indicator"></span>
								<span class="custom-control-description">ВС</span>
							</label>
						</td>
					</tr>
					<tr>
						<td><b>ВРЕМЯ ЗВОНКОВ:</b></td>
						<td>
							<div class="row">
								<div class="col-md-12">
									<select class="form-control" id="timecall" name="timecall">
										<option value="standart" <?=$company['timecall'] == "standart" ? 'selected' : '';?> >Рабочее время (09:00-19:00)</option>
										<option value="maximum" <?=$company['timecall'] == "maximum" ? 'selected' : '';?> >Расширенное время (09:00-21:00)</option>
									</select>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td><b>E-MAIL:</b></td>
						<td>
							<div class="input-group">
								<input type="text" class="form-control input-xsmall" id="company_email" value="<?=$company['email']?>">
							</div>
<? if ($company['uvedomlenie'] == 'true'):?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" checked="" id="uvedomlenie">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?else:?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"  id="uvedomlenie">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?endif;?>
						</td>
					</tr>
					<tr>
						<td><b>SMS клиенту:</b></td>
						<td>
							<div class="input-group">
								<input type="text" class="form-control input-xsmall" id="company_sms_text" placeholder="Шаблон текста смс для клиента" value="<?=$company['sms_text']?>">
							</div>
<?if ($company['sms'] == '1'):?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" checked="" id="company_sms">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?else:?>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"  id="company_sms">
									<span class="custom-control-indicator"></span> 
									<span class="custom-control-description">Уведомлять</span>
								</label>
							</div>
<?endif;?>
						</td>
					</tr>
					<tr>
						<td><b>О КОМПАНИИ:</b></td>
						<td>
							<p><textarea  class="form-control" rows="10" cols="100" id="information"><?=$company['information']?></textarea></p>
						</td>
					</tr>
					<tr>
						<td><b>ТРЕБОВАНИЯ К РАЗГОВОРУ:</b></td>
						<td>
							<div class="input-group input-xlarge">
								<input type="text" class="form-control" id="NAME" placeholder="Раскрывать клиента">
								<span class="input-group-btn">
									<button class="btn btn-success" id="addcrit">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</button>
								</span>
							</div>
							<hr>
							<div id="formb" class="form-body">
								<?$crit = json_decode($company['criteriy'],TRUE);?>
<?
/*
$CRIT[] = 'Раскрывать клиента. Задавать встречные вопросы';
$CRIT[] = 'Произвести презентацию';
$CRIT[] = 'Обозначить стоимость услуги';
$CRIT[] = 'Разговор ТОЛЬКО с ЛПР';
*/
?>
<?if (isset($crit)):?>
	<?foreach ($crit as $key => $val):?>
								<div id="polosa<?=$key?>" class="form-group">
									<span title = "rezt" class="label label-info"> <?=$val?> </span>
									<button class="btn btn-danger btn-sm" kto="<?=$key?>" onclick="delcrit('<?=$key?>')">
										<i class="fa fa-trash"></i>
									</button>
								</div>
	<?endforeach;?>
<?endif;?>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<b>Интеграция с amoCRM:</b>
							<div class=""><img src="/assets/img/logo/amocrm-logo-white.png" class="img-avatar img-avatar128"></div>
						</td>
						<td>
							<div class="row form-group">
								<div class="col-6">
									<div class="input-group">
										<span class="input-group-addon">E-mail</span>
										<input type="text" class="form-control input-xsmall" id="amoCRM_email" value="<?if(isset($amoDB['email'])) echo($amoDB['email']);?>" placeholder="mail@example.ru">
									</div>
								</div>
								<div class="col-6">
									<div class="input-group">
										<span class="input-group-addon">Домен <i style="margin-left: 5px;" data-toggle="popover" title="" data-placement="top" data-content="формат: example.amocrm.ru" class="fa fa-question-circle"></i></span>
										<input type="text" class="form-control input-xsmall" id="amoCRM_domain" value="<?if(isset($amoDB['domain'])) echo($amoDB['domain']);?>" placeholder="example.amocrm.ru">
									</div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-12">
									<div class="input-group">
										<span class="input-group-addon">API-ключ</span>
										<input type="text" class="form-control input-xsmall" id="amoCRM_apikey" value="<?if(isset($amoDB['apikey'])) echo($amoDB['apikey']);?>">
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
				<p align="right">
					<button class="btn btn-info" onclick="changeinformation()" >Изменить информацию</button>
				</p>
			</div>
		</div>
	</div>
</div>   
<script>
$("#addcrit").click(function() {
	var NAME = $("#NAME").val();
	var url = 'wform';
	var name = 'addcrit';
	var idc = <?=$idc?>;
	var bd = $('[title = "rezt"]').length;
	if (NAME.length < 2) {
		alert('В поле должно быть более 2-х символов');
		return;
	}
	var str = '&idc=' + idc + '&NAME=' + NAME
	$.ajax(
		{
			url: '/' + url,
			type: 'POST',
			data: name + '_f=1' + str,
			cache: false,
			success: function(result) {
				obj = jQuery.parseJSON(result);
				if (obj.message == "done") {
					$("#NAME").val('');
					$("#formb").append('<div id="polosa' + bd + '" class="form-group"><span title = "rezt" class="label label-info">' + NAME + '</span><button class="btn btn-danger btn-sm" kto="' + bd + '"  onclick="delcrit(' + bd + ')" ><i class="fa fa-trash"></i></button></div>');
				} else {
					alert(obj.message);
				}
			}
		}
	);
});

function delcrit(kto) {
	var bd = $('[title = "rezt"]').length;
	var url = 'wform';
	var name = 'delcrit';
	var idc = <?=$idc?>;
	if (bd < 2) {
		alert('Должно остатся хотябы 1 поле');
		exit();
	}
	var str = '&idc=' + idc + '&kto=' + kto
	$.ajax(
		{
			url: '/' + url,
			type: 'POST',
			data: name + '_f=1' + str,
			cache: false,
			success: function(result) {
				obj = jQuery.parseJSON(result);
				if (obj.message == "done") {
					$("#polosa" + kto).remove();
				} else {
					alert(obj.message);
				}
			}
		}
	);
}
</script> 