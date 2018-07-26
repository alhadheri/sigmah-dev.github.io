Index: src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Revision 1501)
+++ src/main/java/org/sigmah/client/i18n/UIConstants.properties	(Arbeitskopie)
@@ -47,6 +47,14 @@
 # Global permissions
 VIEW_PROJECT = View project
 
+VIEW_INDICATOR = View indicator
+
+MANAGE_INDICATOR = Manage indicator
+
+EDIT_INDICATOR = Edit indicator
+
+
+
 acronym = Acronym
 
 activities = Activities
@@ -1569,6 +1577,10 @@
 
 permViewProjectInsufficient = Sorry, you don't have sufficient permissions to view this project.
 
+permEditIndicatorInsufficient = Sorry, you don't have sufficient permissions to edit this indicator.
+
+permManageIndicatorInsufficient = Sorry, you don't have sufficient permissions to manage this indicator.
+
 # Permissions
 permViewProjectsInsufficient = Sorry, you don't have sufficient permissions to view projects.
 
Index: src/main/java/org/sigmah/client/page/common/toolbar/ActionToolBar.java
===================================================================
--- src/main/java/org/sigmah/client/page/common/toolbar/ActionToolBar.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/common/toolbar/ActionToolBar.java	(Arbeitskopie)
@@ -5,8 +5,15 @@
 
 package org.sigmah.client.page.common.toolbar;
 
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
+
 import com.allen_sauer.gwt.log.client.Log;
-import com.extjs.gxt.ui.client.event.*;
+import com.extjs.gxt.ui.client.event.ButtonEvent;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.event.MenuEvent;
+import com.extjs.gxt.ui.client.event.SelectionListener;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.button.SplitButton;
@@ -14,141 +21,147 @@
 import com.extjs.gxt.ui.client.widget.menu.MenuItem;
 import com.extjs.gxt.ui.client.widget.toolbar.ToolBar;
 import com.google.gwt.user.client.ui.AbstractImagePrototype;
-import org.sigmah.client.i18n.I18N;
-import org.sigmah.client.icon.IconImageBundle;
 
 /**
  * Convenience subclass for the GXT toolbar that directs all tool actions
- * through a common choke point implementing {@link org.sigmah.client.page.common.toolbar.ActionListener}
- *
- * Also centralizes look&feel of common buttons like New, Edit, Refresh, Save, etc.
- *
+ * through a common choke point implementing
+ * {@link org.sigmah.client.page.common.toolbar.ActionListener}
+ * 
+ * Also centralizes look&feel of common buttons like New, Edit, Refresh, Save,
+ * etc.
+ * 
  */
 public class ActionToolBar extends ToolBar implements Listener<ButtonEvent> {
 
-    private ActionListener listener;
-    private SplitButton saveButton;
+	private ActionListener listener;
+	private SplitButton saveButton;
 
-    public ActionToolBar() {
-    }
+	public ActionToolBar() {
+	}
 
-    public ActionToolBar(ActionListener listener) {
-        this.listener = listener;
-        setEnabled(listener != null);
-    }
+	public ActionToolBar(ActionListener listener) {
+		this.listener = listener;
+		setEnabled(listener != null);
+	}
 
-    /**
-     *
-     * @param actionId The id to be provided to the {@link org.sigmah.client.page.common.toolbar.ActionListener} if
-     * the button is selected
-     * @param text Text of the button
-     * @param icon Icon of the button. See {@link org.sigmah.client.icon.IconImageBundle}
-     */
-    public void addButton(String actionId, String text, AbstractImagePrototype icon) {
-        Button button = new Button(text, icon);
-        button.setItemId(actionId);
-        button.addListener(Events.Select, this);
-        add(button);
-    }
+	/**
+	 * 
+	 * @param actionId
+	 *            The id to be provided to the
+	 *            {@link org.sigmah.client.page.common.toolbar.ActionListener}
+	 *            if the button is selected
+	 * @param text
+	 *            Text of the button
+	 * @param icon
+	 *            Icon of the button. See
+	 *            {@link org.sigmah.client.icon.IconImageBundle}
+	 */
+	public void addButton(String actionId, String text, AbstractImagePrototype icon) {
+		Button button = new Button(text, icon);
+		button.setItemId(actionId);
+		button.addListener(Events.Select, this);
+		add(button);
+	}
 
-    public void addEditButton() {
-        addEditButton(IconImageBundle.ICONS.editPage());
-    }
+	public void addEditButton() {
+		addEditButton(IconImageBundle.ICONS.editPage());
+	}
 
-    public void addEditButton(AbstractImagePrototype icon) {
-      addButton(UIActions.edit, I18N.CONSTANTS.edit(), icon);
-    }
+	public void addEditButton(AbstractImagePrototype icon) {
+		addButton(UIActions.edit, I18N.CONSTANTS.edit(), icon);
+	}
 
-    public void addDeleteButton() {
-        addButton(UIActions.delete, I18N.CONSTANTS.delete(), IconImageBundle.ICONS.delete());
-    }
+	public void addDeleteButton() {
+		addButton(UIActions.delete, I18N.CONSTANTS.delete(), IconImageBundle.ICONS.delete());
+	}
 
-    public void addDeleteButton(String text) {
-        addButton(UIActions.delete, text, IconImageBundle.ICONS.delete());
-    }
+	public void addDeleteButton(String text) {
+		addButton(UIActions.delete, text, IconImageBundle.ICONS.delete());
+	}
 
-    public void addExcelExportButton() {
-        addButton(UIActions.export, I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel());
-    }
+	public void addExcelExportButton() {
+		addButton(UIActions.export, I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel());
+	}
 
-    public void addRefreshButton() {
-        addButton(UIActions.refresh, I18N.CONSTANTS.refreshPreview(), IconImageBundle.ICONS.refresh());
-    }
+	public void addRefreshButton() {
+		addButton(UIActions.refresh, I18N.CONSTANTS.refreshPreview(), IconImageBundle.ICONS.refresh());
+	}
 
-    public void addSaveSplitButton() {
-        saveButton = new SplitButton(I18N.CONSTANTS.save());
-        saveButton.setIcon(IconImageBundle.ICONS.save());
-        saveButton.setItemId(UIActions.save);
-        saveButton.addListener(Events.Select, this);
+	public void addSaveSplitButton() {
+		saveButton = new SplitButton(I18N.CONSTANTS.save());
+		saveButton.setIcon(IconImageBundle.ICONS.save());
+		saveButton.setItemId(UIActions.save);
+		saveButton.addListener(Events.Select, this);
 
-        Menu menu = new Menu();
-        MenuItem saveItem = new MenuItem(I18N.CONSTANTS.save(), IconImageBundle.ICONS.save(), new SelectionListener<MenuEvent>() {
-            @Override
-            public void componentSelected(MenuEvent ce) {
-                if(listener!=null) {
-                    listener.onUIAction(UIActions.save);
-                }
-            }
-        });
-        menu.add(saveItem);
+		Menu menu = new Menu();
+		MenuItem saveItem = new MenuItem(I18N.CONSTANTS.save(), IconImageBundle.ICONS.save(),
+						new SelectionListener<MenuEvent>() {
+							@Override
+							public void componentSelected(MenuEvent ce) {
+								if (listener != null) {
+									listener.onUIAction(UIActions.save);
+								}
+							}
+						});
+		menu.add(saveItem);
 
-        MenuItem discardItem = new MenuItem(I18N.CONSTANTS.discardChanges(), IconImageBundle.ICONS.cancel(),
-            new SelectionListener<MenuEvent>() {
-                @Override
-                public void componentSelected(MenuEvent ce) {
-                    listener.onUIAction(UIActions.discardChanges);
-                }
-            });
-        menu.add(discardItem);
+		MenuItem discardItem = new MenuItem(I18N.CONSTANTS.discardChanges(), IconImageBundle.ICONS.cancel(),
+						new SelectionListener<MenuEvent>() {
+							@Override
+							public void componentSelected(MenuEvent ce) {
+								listener.onUIAction(UIActions.discardChanges);
+							}
+						});
+		menu.add(discardItem);
 
-        saveButton.setMenu(menu);
+		saveButton.setMenu(menu);
 
-        add(saveButton);
-    }
+		add(saveButton);
+	}
 
-    public void setDirty(boolean dirty) {
-        if(saveButton != null) {
-            saveButton.setEnabled(dirty);
-            if(dirty) {
-                saveButton.setText(I18N.CONSTANTS.save());
-                saveButton.setIcon(IconImageBundle.ICONS.save());
-            } else{
-                saveButton.setText(I18N.CONSTANTS.saved());
-            }
-        }
-    }
-    
+	public void setDirty(boolean dirty) {
+		if (saveButton != null) {
+			saveButton.setEnabled(dirty);
+			if (dirty) {
+				saveButton.setText(I18N.CONSTANTS.save());
+				saveButton.setIcon(IconImageBundle.ICONS.save());
+			} else {
+				saveButton.setText(I18N.CONSTANTS.saved());
+			}
+		}
+	}
+
 	public void setSaving() {
-		if(saveButton != null) {
+		if (saveButton != null) {
 			saveButton.setEnabled(false);
 			saveButton.setText(I18N.CONSTANTS.saving());
 		}
 	}
 
+	public void handleEvent(ButtonEvent be) {
+		if (listener != null) {
+			listener.onUIAction(be.getButton().getItemId());
+		}
+		fireEvent(Events.Select, be);
+	}
 
-    public void handleEvent(ButtonEvent be) {
-        if(listener != null) {
-            listener.onUIAction(be.getButton().getItemId());
-        }
-        fireEvent(Events.Select, be);
-    }
+	public void setActionEnabled(String actionId, boolean enabled) {
+		Component c = getItemByItemId(actionId);
 
-    public void setActionEnabled(String actionId, boolean enabled) {
-        Component c = getItemByItemId(actionId);
+		if (c != null) {
+			c.setEnabled(enabled);
+		} else {
+			Log.warn("ActionToolBar: setActionEnabled(" + actionId + ") was called, but button is not present");
+		}
+	}
 
-        if(c!=null) {
-            c.setEnabled(enabled);
-        } else {
-            Log.warn("ActionToolBar: setActionEnabled(" + actionId + ") was called, but button is not present");
-        }
-    }
+	public void setListener(ActionListener listener) {
+		this.listener = listener;
+		setEnabled(listener != null);
+	}
 
-    public void setListener(ActionListener listener) {
-        this.listener = listener;
-        setEnabled(listener != null);
-    }
+	public SplitButton getSaveButton() {
+		return saveButton;
+	}
 
-
-
-
 }
Index: src/main/java/org/sigmah/client/page/config/design/DesignFormContainer.java
===================================================================
--- src/main/java/org/sigmah/client/page/config/design/DesignFormContainer.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/config/design/DesignFormContainer.java	(Arbeitskopie)
@@ -8,7 +8,6 @@
 import org.sigmah.shared.dto.ActivityDTO;
 import org.sigmah.shared.dto.AttributeDTO;
 import org.sigmah.shared.dto.AttributeGroupDTO;
-import org.sigmah.shared.dto.EntityDTO;
 import org.sigmah.shared.dto.IndicatorDTO;
 import org.sigmah.shared.dto.IndicatorGroup;
 import org.sigmah.shared.dto.UserDatabaseDTO;
@@ -20,110 +19,106 @@
 import com.extjs.gxt.ui.client.widget.treegrid.EditorTreeGrid;
 
 public class DesignFormContainer extends ContentPanel {
-    
-    private final Dispatcher service; 
-    private final UserDatabaseDTO db;
-    private final EditorTreeGrid<ModelData> tree;
-	
-    public DesignFormContainer(Dispatcher service, UserDatabaseDTO db,
-			EditorTreeGrid<ModelData> tree) {
-    	this.service = service;
-    	this.db = db;
-    	this.tree = tree;
-    	setHeaderVisible(false);
-        setBorders(false);
-        setFrame(false);
+
+	private final Dispatcher service;
+	private final UserDatabaseDTO db;
+	private final EditorTreeGrid<ModelData> tree;
+
+	public DesignFormContainer(Dispatcher service, UserDatabaseDTO db, EditorTreeGrid<ModelData> tree) {
+		this.service = service;
+		this.db = db;
+		this.tree = tree;
+		setHeaderVisible(false);
+		setBorders(false);
+		setFrame(false);
 	}
-    
-    
- 	public FormDialogTether showNewForm(ModelData entity, FormDialogCallback callback) {
-        AbstractDesignForm form = createForm(entity);
-        form.getBinding().bind(entity);
 
-        for (FieldBinding field : form.getBinding().getBindings()) {
-            field.getField().clearInvalid();
-        }
-        
-        FormDialogImpl dlg = new FormDialogImpl(form);
-        dlg.setWidth(form.getPreferredDialogWidth());
-        dlg.setHeight(form.getPreferredDialogHeight());
-        dlg.setScrollMode(Style.Scroll.AUTOY);
+	public FormDialogTether showNewForm(ModelData entity, FormDialogCallback callback) {
+		AbstractDesignForm form = createForm(entity);
+		form.getBinding().bind(entity);
 
-        if (entity instanceof ActivityDTO) {
-            dlg.setHeading(I18N.CONSTANTS.newActivity());
-        } else if (entity instanceof AttributeGroupDTO) {
-            dlg.setHeading(I18N.CONSTANTS.newAttributeGroup());
-        } else if (entity instanceof AttributeDTO) {
-            dlg.setHeading(I18N.CONSTANTS.newAttribute());
-        } else if (entity instanceof IndicatorDTO) {
-            dlg.setHeading(I18N.CONSTANTS.newIndicator());
-        }
+		for (FieldBinding field : form.getBinding().getBindings()) {
+			field.getField().clearInvalid();
+		}
 
-        dlg.show(callback);
-        return dlg;
-    }
+		FormDialogImpl dlg = new FormDialogImpl(form);
+		dlg.setWidth(form.getPreferredDialogWidth());
+		dlg.setHeight(form.getPreferredDialogHeight());
+		dlg.setScrollMode(Style.Scroll.AUTOY);
 
-   public AbstractDesignForm createForm(ModelData sel) {
-        if (sel instanceof ActivityDTO) {
-            return new ActivityForm(service, db);
-        } else if (sel instanceof AttributeGroupDTO) {
-            return new AttributeGroupForm();
-        } else if (sel instanceof AttributeDTO) {
-            return new AttributeForm();
-        } else if (sel instanceof IndicatorDTO) {
-            return new IndicatorForm(service);
-        } else if (sel instanceof IndicatorGroup) {
-        	return new IndicatorGroupForm();
-        }
-        return null;
-    }
+		if (entity instanceof ActivityDTO) {
+			dlg.setHeading(I18N.CONSTANTS.newActivity());
+		} else if (entity instanceof AttributeGroupDTO) {
+			dlg.setHeading(I18N.CONSTANTS.newAttributeGroup());
+		} else if (entity instanceof AttributeDTO) {
+			dlg.setHeading(I18N.CONSTANTS.newAttribute());
+		} else if (entity instanceof IndicatorDTO) {
+			dlg.setHeading(I18N.CONSTANTS.newIndicator());
+		}
 
-   
-    public void showForm(ModelData model) {
-        // do we have the right form?
-        Class formClass = formClassForSelection(model);
-        AbstractDesignForm currentForm = null;
-        if (getItemCount() != 0) {
-            currentForm = (AbstractDesignForm) getItem(0);
-        }
+		dlg.show(callback);
+		return dlg;
+	}
 
-        if (formClass == null) {
-            if (currentForm != null) {
-                currentForm.getBinding().unbind();
-                removeAll();
-            }
-            return;
-        } else {
-            if (currentForm == null ||
-                    (currentForm != null && !formClass.equals(currentForm.getClass()))) {
+	public AbstractDesignForm createForm(ModelData sel) {
+		if (sel instanceof ActivityDTO) {
+			return new ActivityForm(service, db);
+		} else if (sel instanceof AttributeGroupDTO) {
+			return new AttributeGroupForm();
+		} else if (sel instanceof AttributeDTO) {
+			return new AttributeForm();
+		} else if (sel instanceof IndicatorDTO) {
+			return new IndicatorForm(service);
+		} else if (sel instanceof IndicatorGroup) {
+			return new IndicatorGroupForm();
+		}
+		return null;
+	}
 
-                if (currentForm != null) {
-                    removeAll();
-                    currentForm.getBinding().unbind();
-                }
-                currentForm = createForm(model);
-                //currentForm.setReadOnly(!db.isDesignAllowed());
-                currentForm.setHeaderVisible(false);
-                currentForm.setBorders(false);
-                currentForm.setFrame(false);
-                currentForm.getBinding().setStore(tree.getStore());
-                add(currentForm);
-                layout();
-            }
-        }
-        currentForm.getBinding().bind(model);
-    }
-    
+	public void showForm(ModelData model) {
+		// do we have the right form?
+		Class formClass = formClassForSelection(model);
+		AbstractDesignForm currentForm = null;
+		if (getItemCount() != 0) {
+			currentForm = (AbstractDesignForm) getItem(0);
+		}
+
+		if (formClass == null) {
+			if (currentForm != null) {
+				currentForm.getBinding().unbind();
+				removeAll();
+			}
+			return;
+		} else {
+			if (currentForm == null || (currentForm != null && !formClass.equals(currentForm.getClass()))) {
+
+				if (currentForm != null) {
+					removeAll();
+					currentForm.getBinding().unbind();
+				}
+				currentForm = createForm(model);
+				// currentForm.setReadOnly(!db.isDesignAllowed());
+				currentForm.setHeaderVisible(false);
+				currentForm.setBorders(false);
+				currentForm.setFrame(false);
+				currentForm.getBinding().setStore(tree.getStore());
+				add(currentForm);
+				layout();
+			}
+		}
+		currentForm.getBinding().bind(model);
+	}
+
 	private Class formClassForSelection(ModelData sel) {
-        if (sel instanceof ActivityDTO) {
-            return ActivityForm.class;
-        } else if (sel instanceof AttributeGroupDTO) {
-            return AttributeGroupForm.class;
-        } else if (sel instanceof IndicatorDTO) {
-            return IndicatorForm.class;
-        } else if (sel instanceof AttributeDTO) {
-            return AttributeForm.class;
-        }
-        return null;
-    }
+		if (sel instanceof ActivityDTO) {
+			return ActivityForm.class;
+		} else if (sel instanceof AttributeGroupDTO) {
+			return AttributeGroupForm.class;
+		} else if (sel instanceof IndicatorDTO) {
+			return IndicatorForm.class;
+		} else if (sel instanceof AttributeDTO) {
+			return AttributeForm.class;
+		}
+		return null;
+	}
 }
Index: src/main/java/org/sigmah/client/page/config/design/DesignPanel.java
===================================================================
--- src/main/java/org/sigmah/client/page/config/design/DesignPanel.java	(Revision 1501)
+++ src/main/java/org/sigmah/client/page/config/design/DesignPanel.java	(Arbeitskopie)
@@ -10,6 +10,7 @@
 import org.sigmah.client.EventBus;
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.event.IndicatorEvent;
 import org.sigmah.client.event.IndicatorEvent.ChangeType;
 import org.sigmah.client.i18n.I18N;
@@ -27,9 +28,11 @@
 import org.sigmah.shared.command.result.CreateResult;
 import org.sigmah.shared.command.result.IndicatorListResult;
 import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.ExportUtils;
 import org.sigmah.shared.dto.IndicatorDTO;
 import org.sigmah.shared.dto.IndicatorGroup;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 
 import com.extjs.gxt.ui.client.Style;
 import com.extjs.gxt.ui.client.Style.HorizontalAlignment;
@@ -39,6 +42,7 @@
 import com.extjs.gxt.ui.client.dnd.DND;
 import com.extjs.gxt.ui.client.dnd.TreeGridDragSource;
 import com.extjs.gxt.ui.client.dnd.TreeGridDropTarget;
+import com.extjs.gxt.ui.client.event.BaseEvent;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
 import com.extjs.gxt.ui.client.event.DNDEvent;
 import com.extjs.gxt.ui.client.event.DNDListener;
@@ -60,7 +64,6 @@
 import com.extjs.gxt.ui.client.widget.grid.GridCellRenderer;
 import com.extjs.gxt.ui.client.widget.layout.FitLayout;
 import com.extjs.gxt.ui.client.widget.toolbar.FillToolItem;
-import com.extjs.gxt.ui.client.widget.toolbar.SeparatorToolItem;
 import com.extjs.gxt.ui.client.widget.treegrid.CellTreeGridSelectionModel;
 import com.extjs.gxt.ui.client.widget.treegrid.EditorTreeGrid;
 import com.extjs.gxt.ui.client.widget.treegrid.TreeGrid;
@@ -71,527 +74,601 @@
 
 public class DesignPanel extends DesignPanelBase implements ActionListener {
 
-    private Provider<IndicatorDialog> indicatorDialog;
+	private Provider<IndicatorDialog> indicatorDialog;
 
-    private int currentDatabaseId;
-    private boolean indicatorUpdated;
+	private int currentDatabaseId;
+	private boolean indicatorUpdated;
 
-    private MappedIndicatorSelection mappedIndicator;
+	private MappedIndicatorSelection mappedIndicator;
 
-    @Inject
-    public DesignPanel(EventBus eventBus, Dispatcher dispatcher, Provider<IndicatorDialog> indicatorDialog) {
-        super(eventBus, dispatcher);
-        treeStore = new TreeStore<ModelData>();
-        treeStore.setKeyProvider(new ModelKeyProvider<ModelData>() {
+	private final Authentication authentication;
 
-            @Override
-            public String getKey(ModelData model) {
-                if (model instanceof IndicatorGroup) {
-                    return "group" + model.get("id");
-                } else {
-                    return "i" + model.get("id");
-                }
-            }
-        });
-        this.indicatorDialog = indicatorDialog;
+	@Inject
+	public DesignPanel(EventBus eventBus, Dispatcher dispatcher, Provider<IndicatorDialog> indicatorDialog,
+					final Authentication authentication) {
+		super(eventBus, dispatcher);
+		treeStore = new TreeStore<ModelData>();
+		treeStore.setKeyProvider(new ModelKeyProvider<ModelData>() {
 
-        DesignPanelResources.INSTANCE.css().ensureInjected();
+			@Override
+			public String getKey(ModelData model) {
+				if (model instanceof IndicatorGroup) {
+					return "group" + model.get("id");
+				} else {
+					return "i" + model.get("id");
+				}
+			}
+		});
+		this.indicatorDialog = indicatorDialog;
+		this.authentication = authentication;
 
-        setLayout(new FitLayout());
+		DesignPanelResources.INSTANCE.css().ensureInjected();
 
-        mappedIndicator = new MappedIndicatorSelection();
+		setLayout(new FitLayout());
 
-        // setup grid
-        treeGrid = new EditorTreeGrid<ModelData>(treeStore, createColumnModel()) {
+		mappedIndicator = new MappedIndicatorSelection();
 
-            @Override
-            protected boolean hasChildren(ModelData model) {
-                return model instanceof IndicatorGroup;
-            }
-        };
-        treeGrid.setSelectionModel(new ImprovedCellTreeGridSelectionModel<ModelData>());
-        treeGrid.setClicksToEdit(EditorGrid.ClicksToEdit.TWO);
-        treeGrid.setAutoExpandColumn("name");
-        treeGrid.setHideHeaders(false);
-        treeGrid.setLoadMask(true);
+		// setup grid
 
-        treeGrid.getStyle().setNodeCloseIcon(null);
-        treeGrid.getStyle().setNodeOpenIcon(null);
-        treeGrid.getStyle().setLeafIcon(null);
-        // cell click listener
-        treeGrid.addListener(Events.CellClick, new Listener<GridEvent>() {
+		treeGrid = new EditorTreeGrid<ModelData>(treeStore, createColumnModel()) {
 
-            public void handleEvent(GridEvent ge) {
-                switch (DesignTreeGridCellRenderer.computeTarget(ge)) {
-                    case LABEL:
-                        showIndicatorForm((IndicatorDTO) ge.getModel());
-                        break;
-                    case MAP_ICON:
-                        mapSelectionChanged((IndicatorDTO) ge.getModel());
-                        break;
-                    case STAR_ICON:
-                        starChanged((IndicatorDTO) ge.getModel());
-                        break;
-                }
-            }
-        });
-        treeGrid.addListener(Events.BeforeEdit, new Listener<GridEvent>() {
+			@Override
+			protected boolean hasChildren(ModelData model) {
+				return model instanceof IndicatorGroup;
+			}
+		};
 
-            @Override
-            public void handleEvent(GridEvent be) {
-                if (be.getModel() instanceof IndicatorGroup && be.getColIndex() > 0) {
-                    // only the first cell of an indicator group is editable
-                    be.setCancelled(true);
-                }
-            }
-        });
-        treeGrid.addListener(Events.AfterEdit, new Listener<GridEvent>() {
+		treeGrid.setSelectionModel(new ImprovedCellTreeGridSelectionModel<ModelData>());
 
-            @Override
-            public void handleEvent(GridEvent be) {
-                indicatorUpdated = true;
-                if (be.getColIndex() == 0 && be.getModel() instanceof IndicatorGroup) {
-                    onGroupRenamed((IndicatorGroup) be.getModel());
-                }
-            }
-        });
+		treeGrid.setClicksToEdit(EditorGrid.ClicksToEdit.TWO);
 
-        // Setup context menu
+		treeGrid.setAutoExpandColumn("name");
+		treeGrid.setHideHeaders(false);
+		treeGrid.setLoadMask(true);
 
-        TreeGridDragSource source = new TreeGridDragSource(treeGrid);
-        source.addDNDListener(new DNDListener() {
+		treeGrid.getStyle().setNodeCloseIcon(null);
+		treeGrid.getStyle().setNodeOpenIcon(null);
+		treeGrid.getStyle().setLeafIcon(null);
+		// cell click listener
 
-            @Override
-            public void dragStart(DNDEvent e) {
-                ModelData sel = ((CellTreeGridSelectionModel) treeGrid.getSelectionModel()).getSelectCell().model;
+		treeGrid.addListener(Events.CellClick, new Listener<GridEvent>() {
 
-                if (db != null && (!db.isDesignAllowed() || sel == null || sel instanceof Folder)) {
-                    e.setCancelled(true);
-                    e.getStatus().setStatus(false);
-                    return;
-                }
-                super.dragStart(e);
-            }
-        });
+			public void handleEvent(GridEvent ge) {
+				switch (DesignTreeGridCellRenderer.computeTarget(ge)) {
+				case LABEL:
 
-        TreeGridDropTarget target = new TreeGridDropTarget(treeGrid);
-        target.setAllowSelfAsSource(true);
-        target.setFeedback(DND.Feedback.BOTH);
-        target.setAutoExpand(false);
-        target.addDNDListener(new DNDListener() {
+					showIndicatorForm((IndicatorDTO) ge.getModel());
+					break;
+				case MAP_ICON:
 
-            @Override
-            public void dragMove(DNDEvent e) {
-                List<TreeModel> sourceData = e.getData();
-                ModelData source = sourceData.get(0).get("model");
-                TreeGrid.TreeNode target = treeGrid.findNode(e.getTarget());
-                ModelData targetParent = treeStore.getParent(target.getModel());
+					mapSelectionChanged((IndicatorDTO) ge.getModel());
+					break;
+				case STAR_ICON:
 
-                // Indicator Groups cannot be nested for the moment
-                if (source instanceof IndicatorGroup && targetParent != null) {
-                    e.setCancelled(true);
-                    e.getStatus().setStatus(false);
+					starChanged((IndicatorDTO) ge.getModel());
+					break;
+				}
+			}
+		});
 
-                    // Indicator cannot be children of other indicators
-                } else if (source instanceof IndicatorDTO && targetParent instanceof IndicatorDTO) {
-                    e.setCancelled(true);
-                    e.getStatus().setStatus(false);
-                }
+		treeGrid.addListener(Events.BeforeEdit, new Listener<GridEvent>() {
 
-            }
+			@Override
+			public void handleEvent(GridEvent be) {
+				if (be.getModel() instanceof IndicatorGroup && be.getColIndex() > 0) {
+					// only the first cell of an indicator group is editable
+					be.setCancelled(true);
+				}
+			}
+		});
+		treeGrid.addListener(Events.AfterEdit, new Listener<GridEvent>() {
 
-            @Override
-            public void dragDrop(DNDEvent e) {
-                List<TreeModel> sourceData = e.getData();
-                ModelData source = sourceData.get(0).get("model");
-                onNodeDropped(source);
-            }
-        });
-        add(treeGrid);
+			@Override
+			public void handleEvent(GridEvent be) {
+				indicatorUpdated = true;
+				if (be.getColIndex() == 0 && be.getModel() instanceof IndicatorGroup) {
+					onGroupRenamed((IndicatorGroup) be.getModel());
+				}
+			}
+		});
+		// Setup context menu
 
-        toolBar.setListener(this);
-        toolBar.addButton("newIndicatorGroup", I18N.CONSTANTS.newIndicatorGroup(), null);
-        toolBar.addButton("newIndicator", I18N.CONSTANTS.newIndicator(), null);
-        toolBar.addButton("delete", I18N.CONSTANTS.delete(), null);
-        toolBar.addRefreshButton();
-        
-        //Export form button
-        final ExportSpreadsheetFormButton exportFormButton = new ExportSpreadsheetFormButton();  
-        exportFormButton.getButton().addListener(Events.OnClick, new Listener<ButtonEvent>() {
+		TreeGridDragSource source = new TreeGridDragSource(treeGrid);
+		source.addDNDListener(new DNDListener() {
 
 			@Override
+			public void dragStart(DNDEvent e) {
+				ModelData sel = ((CellTreeGridSelectionModel) treeGrid.getSelectionModel()).getSelectCell().model;
+
+				if (db != null && (!db.isDesignAllowed() || sel == null || sel instanceof Folder)) {
+					e.setCancelled(true);
+					e.getStatus().setStatus(false);
+					return;
+				}
+				super.dragStart(e);
+			}
+		});
+
+		TreeGridDropTarget target = new TreeGridDropTarget(treeGrid);
+		target.setAllowSelfAsSource(true);
+		target.setFeedback(DND.Feedback.BOTH);
+		target.setAutoExpand(false);
+		target.addDNDListener(new DNDListener() {
+
+			@Override
+			public void dragMove(DNDEvent e) {
+				List<TreeModel> sourceData = e.getData();
+				ModelData source = sourceData.get(0).get("model");
+				TreeGrid.TreeNode target = treeGrid.findNode(e.getTarget());
+				ModelData targetParent = treeStore.getParent(target.getModel());
+
+				// Indicator Groups cannot be nested for the moment
+				if (source instanceof IndicatorGroup && targetParent != null) {
+					e.setCancelled(true);
+					e.getStatus().setStatus(false);
+
+					// Indicator cannot be children of other indicators
+				} else if (source instanceof IndicatorDTO && targetParent instanceof IndicatorDTO) {
+					e.setCancelled(true);
+					e.getStatus().setStatus(false);
+				}
+
+			}
+
+			@Override
+			public void dragDrop(DNDEvent e) {
+				List<TreeModel> sourceData = e.getData();
+				ModelData source = sourceData.get(0).get("model");
+				onNodeDropped(source);
+			}
+		});
+
+		add(treeGrid);
+
+		toolBar.setListener(this);
+
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR)) {
+
+			toolBar.addButton("newIndicatorGroup", I18N.CONSTANTS.newIndicatorGroup(), null);
+			toolBar.addButton("newIndicator", I18N.CONSTANTS.newIndicator(), null);
+			toolBar.addButton("delete", I18N.CONSTANTS.delete(), null);
+			toolBar.addRefreshButton();
+		}
+
+		// Export form button
+		final ExportSpreadsheetFormButton exportFormButton = new ExportSpreadsheetFormButton();
+		exportFormButton.getButton().addListener(Events.OnClick, new Listener<ButtonEvent>() {
+
+			@Override
 			public void handleEvent(ButtonEvent be) {
-			     exportFormButton.getFieldMap().put(ExportUtils.PARAM_EXPORT_TYPE, 
-						 ExportUtils.ExportType.PROJECT_INDICATOR_LIST.name());
-			     exportFormButton.getFieldMap().put(ExportUtils.PARAM_EXPORT_PROJECT_ID, 
-			    		 String.valueOf(currentDatabaseId));
-			     exportFormButton.triggerExport();
+				exportFormButton.getFieldMap().put(ExportUtils.PARAM_EXPORT_TYPE,
+								ExportUtils.ExportType.PROJECT_INDICATOR_LIST.name());
+				exportFormButton.getFieldMap().put(ExportUtils.PARAM_EXPORT_PROJECT_ID,
+								String.valueOf(currentDatabaseId));
+				exportFormButton.triggerExport();
 			}
 		});
-        toolBar.add(new FillToolItem());
-        toolBar.add(exportFormButton.getButton());
-        toolBar.add(exportFormButton.getExportForm());
-        
-        eventBus.addListener(IndicatorEvent.CHANGED, new Listener<IndicatorEvent>() {
+		toolBar.add(new FillToolItem());
+		toolBar.add(exportFormButton.getButton());
+		toolBar.add(exportFormButton.getExportForm());
 
-            @Override
-            public void handleEvent(IndicatorEvent be) {
-                if (be.getSource() != DesignPanel.this) {
-                    doLoad();
-                }
-            }
-        });
-    }
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR))
+			toolBar.getSaveButton().hide();
 
-    public boolean isIndicatorUpdated() {
-        return indicatorUpdated;
-    }
+		eventBus.addListener(IndicatorEvent.CHANGED, new Listener<IndicatorEvent>() {
 
-    public void setIndicatorUpdated(boolean indicatorUpdated) {
-        this.indicatorUpdated = indicatorUpdated;
-    }
+			@Override
+			public void handleEvent(IndicatorEvent be) {
+				if (be.getSource() != DesignPanel.this) {
+					doLoad();
+				}
+			}
+		});
 
-    @Override
-    public void onUIAction(String actionId) {
-        if (UIActions.save.equals(actionId)) {
-            SavingHelper.save(service, treeStore, this);
-            indicatorUpdated = false;
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR)) {
+			treeGrid.removeAllListeners();
 
-        } else if (UIActions.refresh.equals(actionId)) {
-            doLoad();
+			treeGrid.addListener(Events.BeforeEdit, new Listener<GridEvent>() {
 
-        } else if ("newIndicator".equals(actionId)) {
-            onNewIndicator();
+				@Override
+				public void handleEvent(GridEvent be) {
 
-        } else if ("newIndicatorGroup".equals(actionId)) {
-            onNewIndicatorGroup();
+					be.setCancelled(true);
+				}
+			});
 
-        } else if ("delete".equals(actionId)) {
-            onDelete();
-        }
-    }
+			treeGrid.addListener(Events.CellClick, new Listener<BaseEvent>() {
 
-    @Override
-    protected void onNodeDropped(ModelData source) {
-        // update sortOrder
-        ModelData newParent = treeStore.getParent(source);
-        if (source instanceof IndicatorDTO && newParent instanceof IndicatorGroup) {
-            IndicatorDTO indicator = (IndicatorDTO) source;
-            IndicatorGroup group = (IndicatorGroup) newParent;
-            treeStore.getRecord(indicator).set("groupId", group.getId());
-            indicatorUpdated = true;
-        }
-        renumberRecursively(treeStore.getRootItems(), 1);
-    }
+				@Override
+				public void handleEvent(BaseEvent ge) {
 
-    private int renumberRecursively(List<ModelData> list, int index) {
-        for (ModelData child : list) {
-            if (child instanceof IndicatorDTO) {
-                treeStore.getRecord(child).set("sortOrder", index++);
-            } else if (child instanceof IndicatorGroup) {
-                index = renumberRecursively(treeStore.getChildren(child), index);
-            }
-        }
-        return index;
-    }
+					switch (DesignTreeGridCellRenderer.computeTarget((GridEvent) ge)) {
+					case LABEL:
 
-    protected void starChanged(IndicatorDTO model) {
-        GWT.log("Star clicked");
-    }
+						// showIndicatorForm((IndicatorDTO) ge.getModel());
+						break;
+					case MAP_ICON:
 
-    protected void mapSelectionChanged(IndicatorDTO model) {
-        GWT.log("Map clicked");
-        if (mappedIndicator.getValue() == null || mappedIndicator.getValue().getId() != model.getId()) {
-            mappedIndicator.setValue(model);
-            treeGrid.getView().refresh(false);
-        }
-    }
+						mapSelectionChanged((IndicatorDTO) ((GridEvent) ge).getModel());
+						break;
+					case STAR_ICON:
 
-    /**
-     * Loads the indicators for the given databaseId/projectId
-     * 
-     * @param databaseId
-     */
-    public void load(int databaseId) {
-        this.currentDatabaseId = databaseId;
-        treeGrid.setStateful(true);
-        treeGrid.setStateId("indicatorDesign" + databaseId);
-        doLoad();
-    }
+						starChanged((IndicatorDTO) ((GridEvent) ge).getModel());
+						break;
+					default:
+						break;
+					}
+				}
+			});
 
-    @Override
-    protected void doLoad() {
-        service.execute(GetIndicators.forDatabase(currentDatabaseId), null, new AsyncCallback<IndicatorListResult>() {
+		}
+	}
 
-            @Override
-            public void onFailure(Throwable caught) {
-                // TODO
-            }
+	public boolean isIndicatorUpdated() {
+		return indicatorUpdated;
+	}
 
-            @Override
-            public void onSuccess(IndicatorListResult result) {
-                treeStore.removeAll();
+	public void setIndicatorUpdated(boolean indicatorUpdated) {
+		this.indicatorUpdated = indicatorUpdated;
+	}
 
-                for (IndicatorGroup group : result.getGroups()) {
-                    treeStore.add(group, false);
-                    for (IndicatorDTO indicator : group.getIndicators()) {
-                        treeStore.add(group, indicator, false);
-                    }
-                }
+	@Override
+	public void onUIAction(String actionId) {
+		if (UIActions.save.equals(actionId)) {
+			SavingHelper.save(service, treeStore, this);
+			indicatorUpdated = false;
 
-                if (!result.getUngroupedIndicators().isEmpty()) {
-                    treeStore.add((List) result.getUngroupedIndicators(), false);
-                }
+		} else if (UIActions.refresh.equals(actionId)) {
+			doLoad();
 
-                onLoaded();
-            }
+		} else if ("newIndicator".equals(actionId)) {
+			onNewIndicator();
 
-        });
-    }
+		} else if ("newIndicatorGroup".equals(actionId)) {
+			onNewIndicatorGroup();
 
-    private void onLoaded() {
-        // set the first indicator as the mapped indicator
-        IndicatorDTO first = getFirstIndicator();
-        if (first != null) {
-            mappedIndicator.setValue(first, true);
-            treeGrid.getView().refresh(false);
-        }
-    }
+		} else if ("delete".equals(actionId)) {
+			onDelete();
+		}
+	}
 
-    private IndicatorDTO getFirstIndicator() {
-        for (ModelData model : treeStore.getAllItems()) {
-            if (model instanceof IndicatorDTO) {
-                return (IndicatorDTO) model;
-            }
-        }
-        return null;
-    }
+	@Override
+	protected void onNodeDropped(ModelData source) {
+		// update sortOrder
+		ModelData newParent = treeStore.getParent(source);
+		if (source instanceof IndicatorDTO && newParent instanceof IndicatorGroup) {
+			IndicatorDTO indicator = (IndicatorDTO) source;
+			IndicatorGroup group = (IndicatorGroup) newParent;
+			treeStore.getRecord(indicator).set("groupId", group.getId());
+			indicatorUpdated = true;
+		}
+		renumberRecursively(treeStore.getRootItems(), 1);
+	}
 
-    private void onNewIndicator() {
-        final IndicatorDTO newIndicator = new IndicatorDTO();
-        newIndicator.setCollectIntervention(true);
-        newIndicator.setAggregation(IndicatorDTO.AGGREGATE_SUM);
-        newIndicator.set("databaseId", currentDatabaseId);
-        newIndicator.setDirectDataEntryEnabled(true);
+	private int renumberRecursively(List<ModelData> list, int index) {
+		for (ModelData child : list) {
+			if (child instanceof IndicatorDTO) {
+				treeStore.getRecord(child).set("sortOrder", index++);
+			} else if (child instanceof IndicatorGroup) {
+				index = renumberRecursively(treeStore.getChildren(child), index);
+			}
+		}
+		return index;
+	}
 
-        final IndicatorGroup parent = computeIndicatorParent(newIndicator);
-        if (parent != null) {
-            newIndicator.setCategory(parent.getName());
-        }
-        final IndicatorForm form = new IndicatorForm(service);
-        form.getBinding().bind(newIndicator);
-        form.setIdVisible(false);
+	protected void starChanged(IndicatorDTO model) {
+		GWT.log("Star clicked");
+	}
 
-        final FormDialogImpl<IndicatorForm> dialog = new FormDialogImpl<IndicatorForm>(form);
-        dialog.setHeading(I18N.CONSTANTS.newIndicator());
-        dialog.setWidth(form.getPreferredDialogWidth());
-        dialog.setHeight(form.getPreferredDialogHeight());
-        dialog.setScrollMode(Style.Scroll.AUTOY);
-        dialog.show(new FormDialogCallback() {
+	protected void mapSelectionChanged(IndicatorDTO model) {
+		GWT.log("Map clicked");
+		if (mappedIndicator.getValue() == null || mappedIndicator.getValue().getId() != model.getId()) {
+			mappedIndicator.setValue(model);
+			treeGrid.getView().refresh(false);
+		}
+	}
 
-            @Override
-            public void onValidated() {
-                service.execute(new CreateEntity(newIndicator), dialog, new AsyncCallback<CreateResult>() {
+	/**
+	 * Loads the indicators for the given databaseId/projectId
+	 * 
+	 * @param databaseId
+	 */
+	public void load(int databaseId) {
+		this.currentDatabaseId = databaseId;
+		treeGrid.setStateful(true);
+		treeGrid.setStateId("indicatorDesign" + databaseId);
+		doLoad();
+	}
 
-                    @Override
-                    public void onFailure(Throwable caught) {
-                        // handled by dialog
-                    }
+	@Override
+	protected void doLoad() {
+		service.execute(GetIndicators.forDatabase(currentDatabaseId), null, new AsyncCallback<IndicatorListResult>() {
 
-                    @Override
-                    public void onSuccess(CreateResult result) {
-                        dialog.hide();
-                        treeStore.add(parent, newIndicator, false);
-                        eventBus.fireEvent(new IndicatorEvent(IndicatorEvent.CHANGED, DesignPanel.this));
-                        doLoad();
-                    }
-                });
-            }
-        });
-    }
+			@Override
+			public void onFailure(Throwable caught) {
+				// TODO
+			}
 
-    private IndicatorGroup computeIndicatorParent(final IndicatorDTO newIndicator) {
-        ModelData sel = getSelection();
-        if (sel != null) {
-            if (sel instanceof IndicatorGroup) {
-                return (IndicatorGroup) sel;
+			@Override
+			public void onSuccess(IndicatorListResult result) {
+				treeStore.removeAll();
 
-            } else if (sel instanceof IndicatorDTO) {
-                return (IndicatorGroup) treeStore.getParent(sel);
-            }
-        }
-        return null;
-    }
+				for (IndicatorGroup group : result.getGroups()) {
+					treeStore.add(group, false);
+					for (IndicatorDTO indicator : group.getIndicators()) {
+						treeStore.add(group, indicator, false);
+					}
+				}
 
-    private void onNewIndicatorGroup() {
-        final IndicatorGroup group = new IndicatorGroup();
-        IndicatorGroupForm form = new IndicatorGroupForm();
-        form.getBinding().bind(group);
+				if (!result.getUngroupedIndicators().isEmpty()) {
+					treeStore.add((List) result.getUngroupedIndicators(), false);
+				}
 
-        final FormDialogImpl<IndicatorGroupForm> dialog = new FormDialogImpl<IndicatorGroupForm>(form);
-        dialog.setHeading(I18N.CONSTANTS.newIndicatorGroup());
-        dialog.setWidth(form.getPreferredDialogWidth());
-        dialog.setHeight(form.getPreferredDialogHeight());
-        dialog.setScrollMode(Style.Scroll.AUTOY);
-        dialog.show(new FormDialogCallback() {
+				onLoaded();
+			}
 
-            @Override
-            public void onValidated() {
+		});
+	}
 
-                service.execute(CreateEntity.IndicatorGroup(currentDatabaseId, group), null,
-                    new AsyncCallback<CreateResult>() {
+	private void onLoaded() {
+		// set the first indicator as the mapped indicator
+		IndicatorDTO first = getFirstIndicator();
+		if (first != null) {
+			mappedIndicator.setValue(first, true);
+			treeGrid.getView().refresh(false);
+		}
+	}
 
-                        @Override
-                        public void onFailure(Throwable caught) {
-                        }
+	private IndicatorDTO getFirstIndicator() {
+		for (ModelData model : treeStore.getAllItems()) {
+			if (model instanceof IndicatorDTO) {
+				return (IndicatorDTO) model;
+			}
+		}
+		return null;
+	}
 
-                        @Override
-                        public void onSuccess(CreateResult result) {
-                            dialog.hide();
-                            doLoad();
-                        }
+	private void onNewIndicator() {
+		final IndicatorDTO newIndicator = new IndicatorDTO();
+		newIndicator.setCollectIntervention(true);
+		newIndicator.setAggregation(IndicatorDTO.AGGREGATE_SUM);
+		newIndicator.set("databaseId", currentDatabaseId);
+		newIndicator.setDirectDataEntryEnabled(true);
 
-                    });
-            }
-        });
-    }
+		final IndicatorGroup parent = computeIndicatorParent(newIndicator);
+		if (parent != null) {
+			newIndicator.setCategory(parent.getName());
+		}
 
-    private void onDelete() {
-        final ModelData selected = treeGrid.getSelectionModel().getSelectedItem();
-        if (selected instanceof IndicatorDTO) {
-            MessageBox.confirm(I18N.CONSTANTS.delete(), I18N.CONSTANTS.confirmDeleteIndicator(),
-                new Listener<MessageBoxEvent>() {
+		final IndicatorForm form = new IndicatorForm(service);
+		form.getBinding().bind(newIndicator);
+		form.setIdVisible(false);
 
-                    @Override
-                    public void handleEvent(MessageBoxEvent be) {
-                        if (be.getButtonClicked().getItemId().equals("yes")) {
-                            deleteIndicator((IndicatorDTO) selected);
-                        }
-                    }
-                });
-        } else if (selected instanceof IndicatorGroup) {
-            deleteIndicatorGroup((IndicatorGroup) selected);
-        }
+		final FormDialogImpl<IndicatorForm> dialog = new FormDialogImpl<IndicatorForm>(form);
+		dialog.setHeading(I18N.CONSTANTS.newIndicator());
+		dialog.setWidth(form.getPreferredDialogWidth());
+		dialog.setHeight(form.getPreferredDialogHeight());
+		dialog.setScrollMode(Style.Scroll.AUTOY);
+		dialog.show(new FormDialogCallback() {
 
-    }
+			@Override
+			public void onValidated() {
+				service.execute(new CreateEntity(newIndicator), dialog, new AsyncCallback<CreateResult>() {
 
-    private void deleteIndicatorGroup(IndicatorGroup selected) {
-        List<ModelData> children = treeStore.getChildren(selected);
-        treeStore.remove(selected);
-        treeStore.getRecord(selected).set("isDeleted", true);
-        // we don't delete the indicators, just move them out of the group
-        for (ModelData child : children) {
-            treeStore.add(child, false);
-            treeStore.getRecord(child).set("groupId", null);
-        }
-    }
+					@Override
+					public void onFailure(Throwable caught) {
+						// handled by dialog
+					}
 
-    private void deleteIndicator(final IndicatorDTO selected) {
-        service.execute(new Delete(selected), new MaskingAsyncMonitor(this, I18N.CONSTANTS.deleting()),
-            new AsyncCallback<VoidResult>() {
+					@Override
+					public void onSuccess(CreateResult result) {
+						dialog.hide();
+						treeStore.add(parent, newIndicator, false);
+						eventBus.fireEvent(new IndicatorEvent(IndicatorEvent.CHANGED, DesignPanel.this));
+						doLoad();
+					}
+				});
+			}
+		});
+	}
 
-                @Override
-                public void onFailure(Throwable caught) {
-                    // handled by monitor
-                }
+	private IndicatorGroup computeIndicatorParent(final IndicatorDTO newIndicator) {
+		ModelData sel = getSelection();
+		if (sel != null) {
+			if (sel instanceof IndicatorGroup) {
+				return (IndicatorGroup) sel;
 
-                @Override
-                public void onSuccess(VoidResult result) {
-                    treeGrid.getTreeStore().remove(selected);
+			} else if (sel instanceof IndicatorDTO) {
+				return (IndicatorGroup) treeStore.getParent(sel);
+			}
+		}
+		return null;
+	}
 
-                    IndicatorEvent event = new IndicatorEvent(IndicatorEvent.CHANGED, DesignPanel.this);
-                    event.setEntityId(selected.getId());
-                    event.setChangeType(ChangeType.DELETED);
+	private void onNewIndicatorGroup() {
+		final IndicatorGroup group = new IndicatorGroup();
+		IndicatorGroupForm form = new IndicatorGroupForm();
+		form.getBinding().bind(group);
 
-                    eventBus.fireEvent(event);
-                }
-            });
-    }
+		final FormDialogImpl<IndicatorGroupForm> dialog = new FormDialogImpl<IndicatorGroupForm>(form);
+		dialog.setHeading(I18N.CONSTANTS.newIndicatorGroup());
+		dialog.setWidth(form.getPreferredDialogWidth());
+		dialog.setHeight(form.getPreferredDialogHeight());
+		dialog.setScrollMode(Style.Scroll.AUTOY);
+		dialog.show(new FormDialogCallback() {
 
-    private void onGroupRenamed(IndicatorGroup model) {
-        List<ModelData> children = treeStore.getChildren(model);
-        for (ModelData child : children) {
-            treeStore.getRecord(child).set("category", model.getName());
-        }
-    }
+			@Override
+			public void onValidated() {
 
-    private void showIndicatorForm(IndicatorDTO model) {
-        IndicatorDialog dialog = indicatorDialog.get();
-        dialog.show(currentDatabaseId, model);
-    }
+				service.execute(CreateEntity.IndicatorGroup(currentDatabaseId, group), null,
+								new AsyncCallback<CreateResult>() {
 
-    protected ColumnModel createColumnModel() {
-        List<ColumnConfig> columns = new ArrayList<ColumnConfig>();
+									@Override
+									public void onFailure(Throwable caught) {
+									}
 
-        TextField<String> nameEditor = new TextField<String>();
-        nameEditor.setAllowBlank(false);
+									@Override
+									public void onSuccess(CreateResult result) {
+										dialog.hide();
+										doLoad();
+									}
 
-        ColumnConfig nameColumn = new ColumnConfig("name", I18N.CONSTANTS.name(), 150);
-        nameColumn.setRenderer(new DesignTreeGridCellRenderer(mappedIndicator));
-        nameColumn.setEditor(new CellEditor(nameEditor));
-        columns.add(nameColumn);
+								});
+			}
+		});
+	}
 
-        ColumnConfig codeColumn = new ColumnConfig("code", I18N.CONSTANTS.code(), 75);
-        codeColumn.setEditor(new CellEditor(new TextField<String>()));
-        columns.add(codeColumn);
+	private void onDelete() {
+		final ModelData selected = treeGrid.getSelectionModel().getSelectedItem();
+		if (selected instanceof IndicatorDTO) {
+			MessageBox.confirm(I18N.CONSTANTS.delete(), I18N.CONSTANTS.confirmDeleteIndicator(),
+							new Listener<MessageBoxEvent>() {
 
-        ColumnConfig objectiveColumn = new ColumnConfig("objective", I18N.CONSTANTS.targetValue(), 75);
-        objectiveColumn.setRenderer(new IndicatorObjectiveValueRenderer());
-        objectiveColumn.setEditor(new CellEditor(new NumberField()));
-        objectiveColumn.setAlignment(HorizontalAlignment.RIGHT);
-        columns.add(objectiveColumn);
+								@Override
+								public void handleEvent(MessageBoxEvent be) {
+									if (be.getButtonClicked().getItemId().equals("yes")) {
+										deleteIndicator((IndicatorDTO) selected);
+									}
+								}
+							});
+		} else if (selected instanceof IndicatorGroup) {
+			deleteIndicatorGroup((IndicatorGroup) selected);
+		}
 
-        ColumnConfig valueColumn = new ColumnConfig("currentValue", I18N.CONSTANTS.value(), 75);
-        valueColumn.setRenderer(new CurrentIndicatorValueRenderer());
-        valueColumn.setAlignment(HorizontalAlignment.RIGHT);
-        columns.add(valueColumn);
+	}
 
-        return new ColumnModel(columns);
-    }
+	private void deleteIndicatorGroup(IndicatorGroup selected) {
+		List<ModelData> children = treeStore.getChildren(selected);
+		treeStore.remove(selected);
+		treeStore.getRecord(selected).set("isDeleted", true);
+		// we don't delete the indicators, just move them out of the group
+		for (ModelData child : children) {
+			treeStore.add(child, false);
+			treeStore.getRecord(child).set("groupId", null);
+		}
+	}
 
-    private String formatIndicatorValue(ModelData model, String property) {
-        Double value = model.get(property);
-        if (value != null) {
-            return IndicatorNumberFormats.forIndicator((IndicatorDTO) model).format(value);
-        } else {
-            return "";
-        }
-    }
+	private void deleteIndicator(final IndicatorDTO selected) {
+		service.execute(new Delete(selected), new MaskingAsyncMonitor(this, I18N.CONSTANTS.deleting()),
+						new AsyncCallback<VoidResult>() {
 
-    private class IndicatorObjectiveValueRenderer implements GridCellRenderer {
+							@Override
+							public void onFailure(Throwable caught) {
+								// handled by monitor
+							}
 
-        @Override
-        public Object render(ModelData model, String property, ColumnData config, int rowIndex, int colIndex,
-                ListStore store, Grid grid) {
+							@Override
+							public void onSuccess(VoidResult result) {
+								treeGrid.getTreeStore().remove(selected);
 
-            if (model instanceof IndicatorDTO) {
-                return formatIndicatorValue(model, property);
-            } else {
-                return "";
-            }
-        }
-    }
+								IndicatorEvent event = new IndicatorEvent(IndicatorEvent.CHANGED, DesignPanel.this);
+								event.setEntityId(selected.getId());
+								event.setChangeType(ChangeType.DELETED);
 
-    private class CurrentIndicatorValueRenderer extends IndicatorObjectiveValueRenderer {
+								eventBus.fireEvent(event);
+							}
+						});
+	}
 
-        @Override
-        public Object render(ModelData model, String property, ColumnData config, int rowIndex, int colIndex,
-                ListStore store, Grid grid) {
-            if (model instanceof IndicatorDTO) {
-                IndicatorDTO indicator = (IndicatorDTO) model;
-                if (indicator.getLabelCounts() != null) {
-                    return indicator.formatMode();
-                } else {
-                    return formatIndicatorValue(model, property);
-                }
-            } else {
-                return "";
-            }
-        }
-    }
+	private void onGroupRenamed(IndicatorGroup model) {
+		List<ModelData> children = treeStore.getChildren(model);
+		for (ModelData child : children) {
+			treeStore.getRecord(child).set("category", model.getName());
+		}
+	}
 
-    public MappedIndicatorSelection getMappedIndicator() {
-        return mappedIndicator;
-    }
+	private void showIndicatorForm(IndicatorDTO model) {
 
+		IndicatorDialog dialog = indicatorDialog.get();
+		boolean getPivot = true;
+		boolean getForm = true;
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR)) {
+			dialog.removeDef();
+			getForm = false;
+		}
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_INDICATOR)) {
+			dialog.removeVal();
+			getPivot = false;
+		}
+		dialog.show(currentDatabaseId, model, getForm, getPivot);
+	}
+
+	protected ColumnModel createColumnModel() {
+		List<ColumnConfig> columns = new ArrayList<ColumnConfig>();
+
+		TextField<String> nameEditor = new TextField<String>();
+		nameEditor.setAllowBlank(false);
+
+		ColumnConfig nameColumn = new ColumnConfig("name", I18N.CONSTANTS.name(), 150);
+
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR))
+			nameColumn.setRenderer(new DesignTreeGridCellRenderer2(mappedIndicator));
+		else
+			nameColumn.setRenderer(new DesignTreeGridCellRenderer(mappedIndicator));
+		nameColumn.setEditor(new CellEditor(nameEditor));
+		columns.add(nameColumn);
+
+		ColumnConfig codeColumn = new ColumnConfig("code", I18N.CONSTANTS.code(), 75);
+		codeColumn.setEditor(new CellEditor(new TextField<String>()));
+		columns.add(codeColumn);
+
+		ColumnConfig objectiveColumn = new ColumnConfig("objective", I18N.CONSTANTS.targetValue(), 75);
+		objectiveColumn.setRenderer(new IndicatorObjectiveValueRenderer());
+		objectiveColumn.setEditor(new CellEditor(new NumberField()));
+		objectiveColumn.setAlignment(HorizontalAlignment.RIGHT);
+		columns.add(objectiveColumn);
+
+		ColumnConfig valueColumn = new ColumnConfig("currentValue", I18N.CONSTANTS.value(), 75);
+		valueColumn.setRenderer(new CurrentIndicatorValueRenderer());
+		valueColumn.setAlignment(HorizontalAlignment.RIGHT);
+		columns.add(valueColumn);
+
+		return new ColumnModel(columns);
+	}
+
+	private String formatIndicatorValue(ModelData model, String property) {
+		Double value = model.get(property);
+		if (value != null) {
+			return IndicatorNumberFormats.forIndicator((IndicatorDTO) model).format(value);
+		} else {
+			return "";
+		}
+	}
+
+	private class IndicatorObjectiveValueRenderer implements GridCellRenderer {
+
+		@Override
+		public Object render(ModelData model, String property, ColumnData config, int rowIndex, int colIndex,
+						ListStore store, Grid grid) {
+
+			if (model instanceof IndicatorDTO) {
+				return formatIndicatorValue(model, property);
+			} else {
+				return "";
+			}
+		}
+	}
+
+	private class CurrentIndicatorValueRenderer extends IndicatorObjectiveValueRenderer {
+
+		@Override
+		public Object render(ModelData model, String property, ColumnData config, int rowIndex, int colIndex,
+						ListStore store, Grid grid) {
+			if (model instanceof IndicatorDTO) {
+				IndicatorDTO indicator = (IndicatorDTO) model;
+				if (indicator.getLabelCounts() != null) {
+					return indicator.formatMode();
+				} else {
+					return formatIndicatorValue(model, property);
+				}
+			} else {
+				return "";
+			}
+		}
+	}
+
+	public MappedIndicatorSelection getMappedIndicator() {
+		return mappedIndicator;
+	}
+
 }
Index: src/main/java/org/sigmah/client/page/config/design/DesignTreeGridCellRenderer.java
===================================================================
--- src/main/java/org/sigmah/client/page/config/design/DesignTreeGridCellRenderer.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/config/design/DesignTreeGridCellRenderer.java	(Arbeitskopie)
@@ -2,7 +2,6 @@
 
 import org.sigmah.client.icon.IconUtil;
 import org.sigmah.shared.dto.IndicatorDTO;
-import org.sigmah.shared.dto.IndicatorGroup;
 
 import com.extjs.gxt.ui.client.data.BaseModelData;
 import com.extjs.gxt.ui.client.data.ModelData;
@@ -14,12 +13,11 @@
 import com.extjs.gxt.ui.client.widget.treegrid.TreeGridCellRenderer;
 import com.google.gwt.dom.client.Element;
 
-
 /**
  * Renders the first column of the TreeGrid in the DesignPanel
  * 
  * @author alexander
- *
+ * 
  */
 class DesignTreeGridCellRenderer extends TreeGridCellRenderer {
 
@@ -29,10 +27,9 @@
 
 	private final static String EMPTY_STAR_ICON = IconUtil.iconHtml(CSS.emptyStarIcon());
 	private final static String STAR_ICON = IconUtil.iconHtml(CSS.emptyStarIcon());
-	
+
 	private MappedIndicatorSelection mappedSelection;
-	
-	
+
 	public DesignTreeGridCellRenderer(MappedIndicatorSelection mappedSelection) {
 		super();
 		this.mappedSelection = mappedSelection;
@@ -43,28 +40,27 @@
 	 * html for the contents of the tree grid cell.
 	 * 
 	 * @author alexander
-	 *
+	 * 
 	 */
 	private class ModelWrapper extends BaseModelData {
 		IndicatorDTO indicator;
 
-
 		@Override
 		public <X> X get(String property) {
-			if(property.equals("name")) {
+			if (property.equals("name")) {
 				StringBuilder html = new StringBuilder();
-				//html.append(EMPTY_STAR_ICON); // to be readded once Project Dashboard displays indicators
+				// html.append(EMPTY_STAR_ICON); // to be readded once Project
+				// Dashboard displays indicators
 				html.append(indicator == mappedSelection.getValue() ? MAP_ICON : EMPTY_MAP_ICON);
 				html.append("<span class='" + CSS.indicatorLabel() + "'>");
 				html.append(Format.htmlEncode(indicator.getName()));
 				html.append("</span>");
-				return (X)html.toString();
+				return (X) html.toString();
 			} else {
-				return indicator.<X>get(property);
+				return indicator.<X> get(property);
 			}
 		}
 
-
 		@Override
 		public boolean equals(Object obj) {
 			return indicator.equals(obj);
@@ -75,15 +71,13 @@
 			return indicator.hashCode();
 		}
 	}
-	
 
 	private ModelWrapper modelWrapper = new ModelWrapper();
 
 	@Override
-	public Object render(ModelData model, String property,
-			ColumnData config, int rowIndex, int colIndex, ListStore store,
-			Grid grid) {
-		if(model instanceof IndicatorDTO) {
+	public Object render(ModelData model, String property, ColumnData config, int rowIndex, int colIndex,
+					ListStore store, Grid grid) {
+		if (model instanceof IndicatorDTO) {
 			modelWrapper.indicator = (IndicatorDTO) model;
 			return super.render(modelWrapper, property, config, rowIndex, colIndex, store, grid);
 		} else {
@@ -92,23 +86,21 @@
 	}
 
 	public enum Target {
-		MAP_ICON,
-		STAR_ICON,
-		LABEL,
-		NONE
+		MAP_ICON, STAR_ICON, LABEL, NONE
 	}
-	
+
 	public static Target computeTarget(GridEvent ge) {
-		Element targetElement =  ge.getEvent().getEventTarget().cast();
+		Element targetElement = ge.getEvent().getEventTarget().cast();
 		String targetClass = targetElement.getClassName();
-		if(CSS.indicatorLabel().equals(targetClass)) {
+		if (CSS.indicatorLabel().equals(targetClass)) {
 			return Target.LABEL;
-		} else if(CSS.mapIcon().equals(targetClass) || CSS.emptyMapIcon().equals(targetClass)) {
+		} else if (CSS.mapIcon().equals(targetClass) || CSS.emptyMapIcon().equals(targetClass)) {
 			return Target.MAP_ICON;
-		} else if(CSS.emptyStarIcon().equals(targetClass) || CSS.starIcon().equals(targetClass)) {
+		} else if (CSS.emptyStarIcon().equals(targetClass) || CSS.starIcon().equals(targetClass)) {
 			return Target.STAR_ICON;
 		} else {
 			return Target.NONE;
 		}
 	}
+
 }
\ No newline at end of file
Index: src/main/java/org/sigmah/client/page/config/design/DesignTreeGridCellRenderer2.java
===================================================================
--- src/main/java/org/sigmah/client/page/config/design/DesignTreeGridCellRenderer2.java	(Revision 0)
+++ src/main/java/org/sigmah/client/page/config/design/DesignTreeGridCellRenderer2.java	(Revision 0)
@@ -0,0 +1,106 @@
+package org.sigmah.client.page.config.design;
+
+import org.sigmah.client.icon.IconUtil;
+import org.sigmah.shared.dto.IndicatorDTO;
+
+import com.extjs.gxt.ui.client.data.BaseModelData;
+import com.extjs.gxt.ui.client.data.ModelData;
+import com.extjs.gxt.ui.client.event.GridEvent;
+import com.extjs.gxt.ui.client.store.ListStore;
+import com.extjs.gxt.ui.client.util.Format;
+import com.extjs.gxt.ui.client.widget.grid.ColumnData;
+import com.extjs.gxt.ui.client.widget.grid.Grid;
+import com.extjs.gxt.ui.client.widget.treegrid.TreeGridCellRenderer;
+import com.google.gwt.dom.client.Element;
+
+/**
+ * Renders the first column of the TreeGrid in the DesignPanel
+ * 
+ * @author alexander
+ * 
+ */
+class DesignTreeGridCellRenderer2 extends TreeGridCellRenderer {
+
+	private final static DesignPanelResources.Style CSS = DesignPanelResources.INSTANCE.css();
+	private final static String EMPTY_MAP_ICON = IconUtil.iconHtml(CSS.emptyMapIcon());
+	private final static String MAP_ICON = IconUtil.iconHtml(CSS.mapIcon());
+
+	private final static String EMPTY_STAR_ICON = IconUtil.iconHtml(CSS.emptyStarIcon());
+	private final static String STAR_ICON = IconUtil.iconHtml(CSS.emptyStarIcon());
+
+	private MappedIndicatorSelection mappedSelection;
+
+	public DesignTreeGridCellRenderer2(MappedIndicatorSelection mappedSelection) {
+		super();
+		this.mappedSelection = mappedSelection;
+	}
+
+	/**
+	 * Wraps the actual IndicatorDTO model class so that we can supply our own
+	 * html for the contents of the tree grid cell.
+	 * 
+	 * @author alexander
+	 * 
+	 */
+	private class ModelWrapper extends BaseModelData {
+		IndicatorDTO indicator;
+
+		@Override
+		public <X> X get(String property) {
+			if (property.equals("name")) {
+				StringBuilder html = new StringBuilder();
+				// html.append(EMPTY_STAR_ICON); // to be readded once Project
+				// Dashboard displays indicators
+				html.append(indicator == mappedSelection.getValue() ? MAP_ICON : EMPTY_MAP_ICON);
+				// html.append("<span class='" + CSS.indicatorLabel() + "'>");
+				html.append(Format.htmlEncode(indicator.getName()));
+				// html.append("</span>");
+				return (X) html.toString();
+			} else {
+				return indicator.<X> get(property);
+			}
+		}
+
+		@Override
+		public boolean equals(Object obj) {
+			return indicator.equals(obj);
+		}
+
+		@Override
+		public int hashCode() {
+			return indicator.hashCode();
+		}
+	}
+
+	private ModelWrapper modelWrapper = new ModelWrapper();
+
+	@Override
+	public Object render(ModelData model, String property, ColumnData config, int rowIndex, int colIndex,
+					ListStore store, Grid grid) {
+		if (model instanceof IndicatorDTO) {
+			modelWrapper.indicator = (IndicatorDTO) model;
+			return super.render(modelWrapper, property, config, rowIndex, colIndex, store, grid);
+		} else {
+			return super.render(model, "name", config, rowIndex, colIndex, store, grid);
+		}
+	}
+
+	public enum Target {
+		MAP_ICON, STAR_ICON, LABEL, NONE
+	}
+
+	public static Target computeTarget(GridEvent ge) {
+		Element targetElement = ge.getEvent().getEventTarget().cast();
+		String targetClass = targetElement.getClassName();
+		if (CSS.indicatorLabel().equals(targetClass)) {
+			return Target.LABEL;
+		} else if (CSS.mapIcon().equals(targetClass) || CSS.emptyMapIcon().equals(targetClass)) {
+			return Target.MAP_ICON;
+		} else if (CSS.emptyStarIcon().equals(targetClass) || CSS.starIcon().equals(targetClass)) {
+			return Target.STAR_ICON;
+		} else {
+			return Target.NONE;
+		}
+	}
+
+}
\ No newline at end of file
Index: src/main/java/org/sigmah/client/page/config/design/IndicatorDialog.java
===================================================================
--- src/main/java/org/sigmah/client/page/config/design/IndicatorDialog.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/config/design/IndicatorDialog.java	(Arbeitskopie)
@@ -23,101 +23,127 @@
 import com.google.inject.Inject;
 
 public class IndicatorDialog extends Dialog {
-	
+
 	private final EventBus eventBus;
 	private final Dispatcher dispatcher;
-	
+
 	private IndicatorForm indicatorForm;
 	private IndicatorPivotPanel pivotPanel;
 	private ButtonBar buttonBar;
-	
+
 	private FormDialogCallback callback;
-	
+
 	private IndicatorDTO indicator;
-	
+
+	private TabItem defTab;
+	private TabItem valuesTab;
+	private TabPanel tabPanel;
+
 	@Inject
 	public IndicatorDialog(EventBus eventBus, Dispatcher dispatcher, IndicatorPivotPanel pivotPanel) {
 		this.eventBus = eventBus;
 		this.dispatcher = dispatcher;
 		this.pivotPanel = pivotPanel;
-		
+
 		setWidth(475);
 		setHeight(300);
 		setClosable(true);
 		setModal(true);
-		
+
 		indicatorForm = new IndicatorForm(dispatcher);
 		indicatorForm.setHeaderVisible(false);
 		indicatorForm.setScrollMode(Scroll.AUTOY);
 		indicatorForm.setStyleAttribute("backgroundColor", "white");
-		
-		TabItem defTab = new TabItem("Definition");
+
+		String title = "";
+
+		title = "Definition";
+
+		defTab = new TabItem(title);
 		defTab.setLayout(new FitLayout());
 		defTab.add(indicatorForm);
-		
-		
-		TabItem valuesTab = new TabItem(I18N.CONSTANTS.value());
+
+		tabPanel = new TabPanel();
+		tabPanel.add(defTab);
+
+		valuesTab = new TabItem(I18N.CONSTANTS.value());
 		valuesTab.setLayout(new FitLayout());
 		valuesTab.add(pivotPanel);
+		tabPanel.add(valuesTab);
 
-		
-		TabPanel tabPanel = new TabPanel();
-		tabPanel.add(defTab);
-		tabPanel.add(valuesTab);
-		
 		setLayout(new FitLayout());
 		add(tabPanel);
-	
+
 		setButtons(OKCANCEL);
-		
-	
+
 	}
-	
-	
+
 	public void show(int databaseId, IndicatorDTO indicator) {
 		this.indicator = new IndicatorDTO();
 		this.indicator.setProperties(indicator.getProperties());
-		
+
 		setHeading(indicator.getName() == null ? I18N.CONSTANTS.newIndicator() : indicator.getName());
-		
+
 		indicatorForm.getBinding().bind(this.indicator);
 		pivotPanel.load(databaseId, this.indicator);
-		
+
 		show();
 	}
 
+	public void show(int databaseId, IndicatorDTO indicator, boolean getForm, boolean getPivot) {
 
+		this.indicator = new IndicatorDTO();
+		this.indicator.setProperties(indicator.getProperties());
+
+		setHeading(indicator.getName() == null ? I18N.CONSTANTS.newIndicator() : indicator.getName());
+
+		if (getForm)
+			indicatorForm.getBinding().bind(this.indicator);
+		if (getPivot)
+			pivotPanel.load(databaseId, this.indicator);
+
+		show();
+	}
+
 	@Override
 	protected void onButtonPressed(Button button) {
-		if(button.getItemId().equals(OK)) {
+		if (button.getItemId().equals(OK)) {
 			save();
 		} else {
 			hide();
 		}
 	}
 
-
 	private void save() {
 		BatchCommand save = new BatchCommand();
 		save.getCommands().add(new UpdateEntity(indicator, indicator.getProperties()));
 		save.getCommands().addAll(pivotPanel.composeSaveCommand().getCommands());
 
-		dispatcher.execute(save, new MaskingAsyncMonitor(this, I18N.CONSTANTS.saving()), new AsyncCallback<BatchResult>() {
+		dispatcher.execute(save, new MaskingAsyncMonitor(this, I18N.CONSTANTS.saving()),
+						new AsyncCallback<BatchResult>() {
 
-			@Override
-			public void onFailure(Throwable caught) {
-				// handled by monitor
-			}
+							@Override
+							public void onFailure(Throwable caught) {
+								// handled by monitor
+							}
 
-			@Override
-			public void onSuccess(BatchResult result) {
-				IndicatorEvent event = new IndicatorEvent(IndicatorEvent.CHANGED, IndicatorDialog.this);
-				event.setEntityId(indicator.getId());
-				event.setChangeType(ChangeType.UPDATED);
-				event.setChanges(indicator.getProperties());
-				eventBus.fireEvent(event);
-				hide();
-			}
-		});
-	}	
+							@Override
+							public void onSuccess(BatchResult result) {
+								IndicatorEvent event = new IndicatorEvent(IndicatorEvent.CHANGED, IndicatorDialog.this);
+								event.setEntityId(indicator.getId());
+								event.setChangeType(ChangeType.UPDATED);
+								event.setChanges(indicator.getProperties());
+								eventBus.fireEvent(event);
+								hide();
+							}
+						});
+	}
+
+	public void removeDef() {
+		tabPanel.remove(defTab);
+	}
+
+	public void removeVal() {
+		tabPanel.remove(valuesTab);
+	}
 }
Index: src/main/java/org/sigmah/client/page/config/design/IndicatorForm.java
===================================================================
--- src/main/java/org/sigmah/client/page/config/design/IndicatorForm.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/config/design/IndicatorForm.java	(Arbeitskopie)
@@ -5,6 +5,9 @@
 
 package org.sigmah.client.page.config.design;
 
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.shared.dto.IndicatorDTO;
 
 import com.extjs.gxt.ui.client.Style.Orientation;
 import com.extjs.gxt.ui.client.Style.Scroll;
@@ -14,83 +17,85 @@
 import com.extjs.gxt.ui.client.event.Events;
 import com.extjs.gxt.ui.client.event.FieldEvent;
 import com.extjs.gxt.ui.client.event.Listener;
-import com.extjs.gxt.ui.client.widget.form.*;
-import org.sigmah.client.dispatch.Dispatcher;
-import org.sigmah.client.i18n.I18N;
-import org.sigmah.shared.dto.IndicatorDTO;
+import com.extjs.gxt.ui.client.widget.form.HiddenField;
+import com.extjs.gxt.ui.client.widget.form.NumberField;
+import com.extjs.gxt.ui.client.widget.form.Radio;
+import com.extjs.gxt.ui.client.widget.form.RadioGroup;
+import com.extjs.gxt.ui.client.widget.form.TextArea;
+import com.extjs.gxt.ui.client.widget.form.TextField;
 
 public class IndicatorForm extends AbstractDesignForm {
 
 	private final Dispatcher dispatcher;
-	
-    private FormBinding binding;
+
+	private FormBinding binding;
 	private NumberField idField;
 	private IndicatorGroupCombo groupField;
 	private TextField<String> unitsField;
 	private ValueLabelField labelsField;
 	private RadioGroup typeGroup;
 	private HiddenField<Integer> aggregation;
-	
+
 	private Radio quantRadio;
 	private Radio qualRadio;
-	
+
 	private Radio sumRadio;
 	private Radio avgRadio;
 	private RadioGroup aggregationGroup;
 	private NumberField objectiveField;
 	private DatasourceField datasourceField;
 
-    public IndicatorForm(Dispatcher dispatcher)  {
-        super();
-        this.dispatcher = dispatcher;
-        binding = new FormBinding(this);
+	public IndicatorForm(Dispatcher dispatcher) {
+		super();
+		this.dispatcher = dispatcher;
+		binding = new FormBinding(this);
 
-        setScrollMode(Scroll.AUTOY);
-        
-        this.setLabelWidth(150);
-        this.setFieldWidth(250);
+		setScrollMode(Scroll.AUTOY);
 
-        idField = new NumberField();
-        idField.setFieldLabel("ID");
-        idField.setReadOnly(true);
-        binding.addFieldBinding(new FieldBinding(idField, "id"));
-        add(idField);
-        
-        TextField<String> codeField = new TextField<String>();
-        codeField.setFieldLabel(I18N.CONSTANTS.indicatorCode());
-        codeField.setAllowBlank(false);
-        binding.addFieldBinding(new FieldBinding(codeField,"code"));
-        this.add(codeField);
+		this.setLabelWidth(150);
+		this.setFieldWidth(250);
 
-        TextField<String> nameField = new TextField<String>();
-        nameField.setFieldLabel(I18N.CONSTANTS.name());
-        nameField.setAllowBlank(false);
-        nameField.setMaxLength(1024);
-        binding.addFieldBinding(new FieldBinding(nameField, "name"));
-        this.add(nameField);
+		idField = new NumberField();
+		idField.setFieldLabel("ID");
+		idField.setReadOnly(true);
+		binding.addFieldBinding(new FieldBinding(idField, "id"));
+		add(idField);
 
-        groupField = new IndicatorGroupCombo(dispatcher);
-        groupField.setFieldLabel(I18N.CONSTANTS.group());
-        groupField.setMaxLength(50);
-        binding.addFieldBinding(groupField.newBinding("groupId"));
-        this.add(groupField);
-        
-        aggregation = new HiddenField<Integer>();
-        aggregation.setFireChangeEventOnSetValue(true);
-        binding.addFieldBinding(new FieldBinding(aggregation, "aggregation"));
-        
-        typeGroup = new RadioGroup("type");
-        typeGroup.setFieldLabel(I18N.CONSTANTS.type());
-        typeGroup.setOrientation(Orientation.HORIZONTAL);
-        typeGroup.add(quantRadio = newRadio(I18N.CONSTANTS.quantitative()));
-        typeGroup.add(qualRadio = newRadio(I18N.CONSTANTS.qualitative()));
-        this.add(typeGroup);
-        
-        typeGroup.addListener(Events.Change, new Listener<FieldEvent>() {
+		TextField<String> codeField = new TextField<String>();
+		codeField.setFieldLabel(I18N.CONSTANTS.indicatorCode());
+		codeField.setAllowBlank(false);
+		binding.addFieldBinding(new FieldBinding(codeField, "code"));
+		this.add(codeField);
 
+		TextField<String> nameField = new TextField<String>();
+		nameField.setFieldLabel(I18N.CONSTANTS.name());
+		nameField.setAllowBlank(false);
+		nameField.setMaxLength(1024);
+		binding.addFieldBinding(new FieldBinding(nameField, "name"));
+		this.add(nameField);
+
+		groupField = new IndicatorGroupCombo(dispatcher);
+		groupField.setFieldLabel(I18N.CONSTANTS.group());
+		groupField.setMaxLength(50);
+		binding.addFieldBinding(groupField.newBinding("groupId"));
+		this.add(groupField);
+
+		aggregation = new HiddenField<Integer>();
+		aggregation.setFireChangeEventOnSetValue(true);
+		binding.addFieldBinding(new FieldBinding(aggregation, "aggregation"));
+
+		typeGroup = new RadioGroup("type");
+		typeGroup.setFieldLabel(I18N.CONSTANTS.type());
+		typeGroup.setOrientation(Orientation.HORIZONTAL);
+		typeGroup.add(quantRadio = newRadio(I18N.CONSTANTS.quantitative()));
+		typeGroup.add(qualRadio = newRadio(I18N.CONSTANTS.qualitative()));
+		this.add(typeGroup);
+
+		typeGroup.addListener(Events.Change, new Listener<FieldEvent>() {
+
 			@Override
 			public void handleEvent(FieldEvent be) {
-				if(typeGroup.getValue() == qualRadio) {
+				if (typeGroup.getValue() == qualRadio) {
 					aggregation.setValue(IndicatorDTO.AGGREGATE_MULTINOMIAL);
 				} else {
 					aggregation.setValue(quantAggSelection());
@@ -98,113 +103,112 @@
 				updateFormLayout();
 			}
 		});
-        
-        
-        labelsField = new ValueLabelField();
-        labelsField.setFieldLabel(I18N.CONSTANTS.possibleValues());
-        binding.addFieldBinding(new FieldBinding(labelsField, "labels"));
-        this.add(labelsField);
-        
-        aggregationGroup = new RadioGroup("quantitativeAggregation");
-        aggregationGroup.setFieldLabel(I18N.CONSTANTS.aggregationMethod());
-        aggregationGroup.add(sumRadio = newRadio(I18N.CONSTANTS.sum()));
-        aggregationGroup.add(avgRadio = newRadio(I18N.CONSTANTS.average()));
-        this.add(aggregationGroup);
-        
-        aggregationGroup.addListener(Events.Change, new Listener<FieldEvent>() {
+
+		labelsField = new ValueLabelField();
+		labelsField.setFieldLabel(I18N.CONSTANTS.possibleValues());
+		binding.addFieldBinding(new FieldBinding(labelsField, "labels"));
+		this.add(labelsField);
+
+		aggregationGroup = new RadioGroup("quantitativeAggregation");
+		aggregationGroup.setFieldLabel(I18N.CONSTANTS.aggregationMethod());
+		aggregationGroup.add(sumRadio = newRadio(I18N.CONSTANTS.sum()));
+		aggregationGroup.add(avgRadio = newRadio(I18N.CONSTANTS.average()));
+		this.add(aggregationGroup);
+
+		aggregationGroup.addListener(Events.Change, new Listener<FieldEvent>() {
 			@Override
 			public void handleEvent(FieldEvent be) {
 				aggregation.setValue(quantAggSelection());
 			}
-        });
-        
-        unitsField = new TextField<String>();
-        unitsField.setFieldLabel(I18N.CONSTANTS.units());
-        unitsField.setAllowBlank(false);
-        unitsField.setMaxLength(15);
-        binding.addFieldBinding(new FieldBinding(unitsField, "units"));
-        this.add(unitsField);
-        
-        objectiveField = new NumberField();
-        objectiveField.setFieldLabel(I18N.CONSTANTS.targetValue());
-        binding.addFieldBinding(new FieldBinding(objectiveField, "objective"));
-        this.add(objectiveField);
-        
-        TextArea verification = new TextArea();
-        verification.setFieldLabel(I18N.CONSTANTS.sourceOfVerification());
-        binding.addFieldBinding(new FieldBinding(verification, "sourceOfVerification"));
-        this.add(verification);
-        
-        TextArea descField = new TextArea();
-        descField.setFieldLabel(I18N.CONSTANTS.indicatorComments());
-        binding.addFieldBinding(new FieldBinding(descField, "description"));
-        this.add(descField);
-                
-        datasourceField = new DatasourceField(dispatcher);
-        datasourceField.setFieldLabel("Datasources");
-        binding.addFieldBinding(new FieldBinding(datasourceField, "dataSourceIds"));
-        binding.addFieldBinding(new FieldBinding(datasourceField.getDirectBox(), "directDataEntryEnabled"));
-        this.add(datasourceField);
-        
-        binding.addListener(Events.Bind, new Listener<BindingEvent>() {
+		});
 
+		unitsField = new TextField<String>();
+		unitsField.setFieldLabel(I18N.CONSTANTS.units());
+		unitsField.setAllowBlank(false);
+		unitsField.setMaxLength(15);
+		binding.addFieldBinding(new FieldBinding(unitsField, "units"));
+		this.add(unitsField);
+
+		objectiveField = new NumberField();
+		objectiveField.setFieldLabel(I18N.CONSTANTS.targetValue());
+		binding.addFieldBinding(new FieldBinding(objectiveField, "objective"));
+		this.add(objectiveField);
+
+		TextArea verification = new TextArea();
+		verification.setFieldLabel(I18N.CONSTANTS.sourceOfVerification());
+		binding.addFieldBinding(new FieldBinding(verification, "sourceOfVerification"));
+		this.add(verification);
+
+		TextArea descField = new TextArea();
+		descField.setFieldLabel(I18N.CONSTANTS.indicatorComments());
+		binding.addFieldBinding(new FieldBinding(descField, "description"));
+		this.add(descField);
+
+		datasourceField = new DatasourceField(dispatcher);
+		datasourceField.setFieldLabel("Datasources");
+		binding.addFieldBinding(new FieldBinding(datasourceField, "dataSourceIds"));
+		binding.addFieldBinding(new FieldBinding(datasourceField.getDirectBox(), "directDataEntryEnabled"));
+		this.add(datasourceField);
+
+		binding.addListener(Events.Bind, new Listener<BindingEvent>() {
+
 			@Override
 			public void handleEvent(BindingEvent be) {
-				if(aggregation.getValue() == IndicatorDTO.AGGREGATE_MULTINOMIAL) {
+				if (aggregation.getValue() == IndicatorDTO.AGGREGATE_MULTINOMIAL) {
 					typeGroup.setValue(qualRadio);
 				} else {
 					typeGroup.setValue(quantRadio);
-					aggregationGroup.setValue(aggregation.getValue() == IndicatorDTO.AGGREGATE_AVG ? avgRadio : sumRadio);
+					aggregationGroup.setValue(aggregation.getValue() == IndicatorDTO.AGGREGATE_AVG ? avgRadio
+									: sumRadio);
 				}
-                IndicatorDTO indicator = (IndicatorDTO) be.getModel();
-                updateDatasources(indicator);
+				IndicatorDTO indicator = (IndicatorDTO) be.getModel();
+				updateDatasources(indicator);
 				updateFormLayout();
-                groupField.loadGroups(indicator);
+				groupField.loadGroups(indicator);
 			}
 		});
-    }
-    
-    protected void updateDatasources(IndicatorDTO indicator) {
+
+	}
+
+	protected void updateDatasources(IndicatorDTO indicator) {
 		datasourceField.load(indicator);
 	}
 
 	private Radio newRadio(String label) {
-    	Radio radio = new Radio();
-    	radio.setBoxLabel(label);
-    	return radio;
-    }
-    
-    public void setIdVisible(boolean visible) {
-    	idField.setVisible(visible);
-    }
-    
-    public void setGroupVisible(boolean visible) {
-    	groupField.setVisible(visible);
-    }
-    
-    private int quantAggSelection() {
-    	if(aggregationGroup.getValue() == avgRadio) {
-    		return IndicatorDTO.AGGREGATE_AVG;
-    	} else {
-    		return IndicatorDTO.AGGREGATE_SUM;
-    	}
-    }
+		Radio radio = new Radio();
+		radio.setBoxLabel(label);
+		return radio;
+	}
 
-    @Override
-    public FormBinding getBinding() {
-        return binding;
-    }
-    
-    private void updateFormLayout() {
-    	labelsField.setVisible(typeGroup.getValue() == qualRadio);
+	public void setIdVisible(boolean visible) {
+		idField.setVisible(visible);
+	}
+
+	public void setGroupVisible(boolean visible) {
+		groupField.setVisible(visible);
+	}
+
+	private int quantAggSelection() {
+		if (aggregationGroup.getValue() == avgRadio) {
+			return IndicatorDTO.AGGREGATE_AVG;
+		} else {
+			return IndicatorDTO.AGGREGATE_SUM;
+		}
+	}
+
+	@Override
+	public FormBinding getBinding() {
+		return binding;
+	}
+
+	private void updateFormLayout() {
+		labelsField.setVisible(typeGroup.getValue() == qualRadio);
 		unitsField.setVisible(typeGroup.getValue() != qualRadio);
 		unitsField.setAllowBlank(typeGroup.getValue() == qualRadio);
 		aggregationGroup.setVisible(typeGroup.getValue() != qualRadio);
 		objectiveField.setVisible(typeGroup.getValue() != qualRadio);
 	}
 
-    
-    
 	@Override
 	public int getPreferredDialogWidth() {
 		return 500;
Index: src/main/java/org/sigmah/client/page/project/ProjectPresenter.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(Revision 1501)
+++ src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(Arbeitskopie)
@@ -3,6 +3,7 @@
  */
 package org.sigmah.client.page.project;
 
+import java.util.ArrayList;
 import java.util.Date;
 import java.util.EnumMap;
 import java.util.HashMap;
@@ -100,133 +101,147 @@
  */
 public class ProjectPresenter implements Frame, TabPage {
 
-    public static final PageId PAGE_ID = new PageId("project");
+	public static final PageId PAGE_ID = new PageId("project");
 
-    public static final int REPORT_TAB_INDEX = 6;
+	public static final int REPORT_TAB_INDEX = 6;
 
-    /**
-     * Description of the view managed by this presenter.
-     */
-    @ImplementedBy(ProjectView.class)
-    public interface View {
+	/**
+	 * Description of the view managed by this presenter.
+	 */
+	@ImplementedBy(ProjectView.class)
+	public interface View {
 
-        public ContentPanel getPanelProjectBanner();
+		public ContentPanel getPanelProjectBanner();
 
-        public ContentPanel getTabPanel();
+		public ContentPanel getTabPanel();
 
-        public ContentPanel getAmendmentBox();
+		public ContentPanel getAmendmentBox();
 
-        public void setMainPanel(Widget widget);
+		public void setMainPanel(Widget widget);
 
-        public void insufficient();
+		public void insufficient();
 
-        public void sufficient();
-    }
+		public void sufficient();
+	}
 
-    private final View view;
-    private final Dispatcher dispatcher;
-    private final Authentication authentication;
-    private final UserLocalCache cache;
-    private final EventBus eventBus;
-    private Page activePage;
+	private final View view;
+	private final Dispatcher dispatcher;
+	private final Authentication authentication;
+	private final UserLocalCache cache;
+	private final EventBus eventBus;
+	private Page activePage;
 
-    private ProjectState currentState;
-    private ToggleAnchor currentTab;
-    /**
-     * The current displayed project.
-     */
-    private ProjectDTO currentProjectDTO;
-    /**
-     * The current displayed phase.
-     */
-    private PhaseDTO currentDisplayedPhaseDTO;
+	private ProjectState currentState;
+	private ToggleAnchor currentTab;
+	/**
+	 * The current displayed project.
+	 */
+	private ProjectDTO currentProjectDTO;
+	/**
+	 * The current displayed phase.
+	 */
+	private PhaseDTO currentDisplayedPhaseDTO;
 
-    private final static Map<Amendment.Action, String> amendmentActionDisplayNames;
+	private final static Map<Amendment.Action, String> amendmentActionDisplayNames;
 
-    static {
-        final EnumMap<Amendment.Action, String> map = new EnumMap<Amendment.Action, String>(Amendment.Action.class);
-        map.put(Amendment.Action.CREATE, I18N.CONSTANTS.amendmentCreate());
-        map.put(Amendment.Action.LOCK, I18N.CONSTANTS.amendmentLock());
-        map.put(Amendment.Action.UNLOCK, I18N.CONSTANTS.amendmentUnlock());
-        map.put(Amendment.Action.REJECT, I18N.CONSTANTS.amendmentReject());
-        map.put(Amendment.Action.VALIDATE, I18N.CONSTANTS.amendmentValidate());
+	static {
+		final EnumMap<Amendment.Action, String> map = new EnumMap<Amendment.Action, String>(Amendment.Action.class);
+		map.put(Amendment.Action.CREATE, I18N.CONSTANTS.amendmentCreate());
+		map.put(Amendment.Action.LOCK, I18N.CONSTANTS.amendmentLock());
+		map.put(Amendment.Action.UNLOCK, I18N.CONSTANTS.amendmentUnlock());
+		map.put(Amendment.Action.REJECT, I18N.CONSTANTS.amendmentReject());
+		map.put(Amendment.Action.VALIDATE, I18N.CONSTANTS.amendmentValidate());
 
-        amendmentActionDisplayNames = map;
-    }
+		amendmentActionDisplayNames = map;
+	}
 
-    private final static String[] MAIN_TABS = {
-                                               I18N.CONSTANTS.projectTabDashboard(),
-                                               I18N.CONSTANTS.projectDetails(),
-                                               I18N.CONSTANTS.projectTabLogFrame(),
-                                               I18N.CONSTANTS.projectTabIndicators(),
-                                               I18N.CONSTANTS.projectTabDataEntry(),
-                                               I18N.CONSTANTS.projectTabCalendar(),
-                                               I18N.CONSTANTS.projectTabReports()
-    /* , I18N.CONSTANTS.projectTabSecurityIncident() */// TO DO
-            };
+	// private final static String[] MAIN_TABS = {
+	// I18N.CONSTANTS.projectTabDashboard(),
+	// I18N.CONSTANTS.projectDetails(),
+	// I18N.CONSTANTS.projectTabLogFrame(),
+	// I18N.CONSTANTS.projectTabIndicators(),
+	// I18N.CONSTANTS.projectTabDataEntry(),
+	// I18N.CONSTANTS.projectTabCalendar(),
+	// I18N.CONSTANTS.projectTabReports()
+	// /* , I18N.CONSTANTS.projectTabSecurityIncident() */// TO DO
+	// };
 
-    // TODO: the sub presenters all probably need to be notified of when the
-    // project is to be loaded
-    // into view. Maybe a SubProjectPresenter interface? Then projectIndicators
-    // field can be removed below
-    private final SubPresenter[] presenters;
+	private final static ArrayList<String> MAIN_TABS = new ArrayList<String>();
+	// TODO: the sub presenters all probably need to be notified of when the
+	// project is to be loaded
+	// into view. Maybe a SubProjectPresenter interface? Then projectIndicators
+	// field can be removed below
+	private final static ArrayList<SubPresenter> presenters = new ArrayList<SubPresenter>();
 
-    @Inject
-    public ProjectPresenter(final Dispatcher dispatcher, View view, Authentication authentication, final EventBus eventBus, final UserLocalCache cache, ProjectIndicatorsContainer projectIndicators, ProjectPivotContainer pivot) {
-        this.dispatcher = dispatcher;
-        this.view = view;
-        this.authentication = authentication;
-        this.cache = cache;
-        this.eventBus = eventBus;
+	@Inject
+	public ProjectPresenter(final Dispatcher dispatcher, View view, Authentication authentication,
+					final EventBus eventBus, final UserLocalCache cache, ProjectIndicatorsContainer projectIndicators,
+					ProjectPivotContainer pivot) {
+		this.dispatcher = dispatcher;
+		this.view = view;
+		this.authentication = authentication;
+		this.cache = cache;
+		this.eventBus = eventBus;
 
-        // For development.
-        // final DummyPresenter dummyPresenter = new DummyPresenter();
+		// For development.
+		// final DummyPresenter dummyPresenter = new DummyPresenter();
 
-        this.presenters =
-                new SubPresenter[] {
-                                    new ProjectDashboardPresenter(dispatcher, eventBus, authentication, this, cache), // Dashboard
-                                    new ProjectDetailsPresenter(eventBus, dispatcher, authentication, this, cache), // Details,
-                                    new ProjectLogFramePresenter(eventBus, dispatcher, authentication, this), // Logic
-                                    projectIndicators,
-                                    pivot,
-                                    new ProjectCalendarPresenter(dispatcher, authentication, this), // Calendar
-                                    new ProjectReportsPresenter(authentication, dispatcher, eventBus, this) // Reports
-                /* ,dummyPresenter */// Security incidents TO DO
-                };
+		if (MAIN_TABS.isEmpty()) {
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabDashboard());
+			MAIN_TABS.add(I18N.CONSTANTS.projectDetails());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabLogFrame());
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_INDICATOR)) {
+				MAIN_TABS.add(I18N.CONSTANTS.projectTabIndicators());
+				MAIN_TABS.add(I18N.CONSTANTS.projectTabDataEntry());
+			}
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabCalendar());
+			MAIN_TABS.add(I18N.CONSTANTS.projectTabReports());
+		}
 
-        for (int i = 0; i < MAIN_TABS.length; i++) {
-            final int index = i;
+		ProjectPresenter.presenters
+						.add(new ProjectDashboardPresenter(dispatcher, eventBus, authentication, this, cache));
+		ProjectPresenter.presenters.add(new ProjectDetailsPresenter(eventBus, dispatcher, authentication, this, cache));
+		ProjectPresenter.presenters.add(new ProjectLogFramePresenter(eventBus, dispatcher, authentication, this));
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_INDICATOR)) {
+			ProjectPresenter.presenters.add(projectIndicators);
+			ProjectPresenter.presenters.add(pivot);
+		}
+		ProjectPresenter.presenters.add(new ProjectCalendarPresenter(dispatcher, authentication, this));
+		ProjectPresenter.presenters.add(new ProjectReportsPresenter(authentication, dispatcher, eventBus, this));
 
-            String tabTitle = MAIN_TABS[i];
+		for (int i = 0; i < MAIN_TABS.size(); i++) {
+			final int index = i;
 
-            final HBoxLayoutData layoutData = new HBoxLayoutData();
-            layoutData.setMargins(new Margins(2, 10, 0, 0));
+			String tabTitle = MAIN_TABS.get(index);
 
-            final ToggleAnchor anchor = new ToggleAnchor(tabTitle);
-            anchor.setAnchorMode(true);
+			final HBoxLayoutData layoutData = new HBoxLayoutData();
+			layoutData.setMargins(new Margins(2, 10, 0, 0));
 
-            anchor.addClickHandler(new ClickHandler() {
+			final ToggleAnchor anchor = new ToggleAnchor(tabTitle);
+			anchor.setAnchorMode(true);
 
-                @Override
-                public void onClick(ClickEvent event) {
-                    eventBus.fireEvent(new NavigationEvent(NavigationHandler.NavigationRequested, currentState
-                        .deriveTo(index), null));
-                }
-            });
+			anchor.addClickHandler(new ClickHandler() {
 
-            this.view.getTabPanel().add(anchor, layoutData);
-        }
-        
-        //Export excel button
-        final Button exportAnchor = new Button(I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel());
-        exportAnchor.setHeight("22px");
-        
-        final HBoxLayoutData layoutData = new HBoxLayoutData();
-        layoutData.setMargins(new Margins(0, 3, 0, 0));
-                        
-        final ExportSpreadsheetFormButton exportForm = new ExportSpreadsheetFormButton();
-        exportAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
-			
+				@Override
+				public void onClick(ClickEvent event) {
+					eventBus.fireEvent(new NavigationEvent(NavigationHandler.NavigationRequested, currentState
+									.deriveTo(index), null));
+				}
+			});
+
+			this.view.getTabPanel().add(anchor, layoutData);
+		}
+
+		// Export excel button
+		final Button exportAnchor = new Button(I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel());
+		exportAnchor.setHeight("22px");
+
+		final HBoxLayoutData layoutData = new HBoxLayoutData();
+		layoutData.setMargins(new Margins(0, 3, 0, 0));
+
+		final ExportSpreadsheetFormButton exportForm = new ExportSpreadsheetFormButton();
+		exportAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
+
 			@Override
 			public void componentSelected(ButtonEvent arg0) {
 				final Window w = new Window();
@@ -234,661 +249,663 @@
 				w.setModal(true);
 				w.setBlinkModal(true);
 				w.setLayout(new FitLayout());
-				w.setSize(350,180);
+				w.setSize(350, 180);
 				w.setHeading(I18N.CONSTANTS.exportData());
 
-				final FormPanel panel=new FormPanel();		 
-				
+				final FormPanel panel = new FormPanel();
+
 				final CheckBoxGroup options = new CheckBoxGroup();
 				options.setOrientation(Orientation.VERTICAL);
 				options.setFieldLabel(I18N.CONSTANTS.exportOptions());
-				final CheckBox synthesisBox=createCheckBox(I18N.CONSTANTS.projectSynthesis());
+				final CheckBox synthesisBox = createCheckBox(I18N.CONSTANTS.projectSynthesis());
 				synthesisBox.setValue(true);
 				synthesisBox.setEnabled(false);
-				final CheckBox indicatorBox=createCheckBox(I18N.CONSTANTS.flexibleElementIndicatorsList());
-				final CheckBox logFrameBox=createCheckBox(I18N.CONSTANTS.logFrame());
-				options.add(synthesisBox); 				
+				final CheckBox indicatorBox = createCheckBox(I18N.CONSTANTS.flexibleElementIndicatorsList());
+				final CheckBox logFrameBox = createCheckBox(I18N.CONSTANTS.logFrame());
+				options.add(synthesisBox);
 				options.add(logFrameBox);
 				options.add(indicatorBox);
-				 
- 				
- 				panel.add(options);
- 				
+
+				panel.add(options);
+
 				final Button export = new Button(I18N.CONSTANTS.export());
-		 		panel.getButtonBar().add(export); 	
+				panel.getButtonBar().add(export);
 				export.addSelectionListener(new SelectionListener<ButtonEvent>() {
 
 					@Override
 					public void componentSelected(ButtonEvent ce) {
-						 ExportUtils.ExportType type=ExportUtils.ExportType.PROJECT_SYNTHESIS;
-				          if(indicatorBox.getValue() && logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME_INDICATORS;
-				          }else if(indicatorBox.getValue() && !logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_INDICATORS;
-				          }else if(!indicatorBox.getValue() && logFrameBox.getValue()){
-				       	   type=ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME;
-				          }          
-				          exportForm.getFieldMap().put(
-				       		   ExportUtils.PARAM_EXPORT_TYPE,type.name());
-				          
+						ExportUtils.ExportType type = ExportUtils.ExportType.PROJECT_SYNTHESIS;
+						if (indicatorBox.getValue() && logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME_INDICATORS;
+						} else if (indicatorBox.getValue() && !logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_INDICATORS;
+						} else if (!indicatorBox.getValue() && logFrameBox.getValue()) {
+							type = ExportUtils.ExportType.PROJECT_SYNTHESIS_LOGFRAME;
+						}
+						exportForm.getFieldMap().put(ExportUtils.PARAM_EXPORT_TYPE, type.name());
+
 						exportForm.triggerExport();
 						w.hide();
 					}
-				});		
-			 
+				});
+
 				w.add(panel);
 				w.show();
-				 
-				exportForm.getFieldMap().put(ExportUtils.PARAM_EXPORT_PROJECT_ID, 
-		        		String.valueOf(currentProjectDTO.getId()));				
+
+				exportForm.getFieldMap().put(ExportUtils.PARAM_EXPORT_PROJECT_ID,
+								String.valueOf(currentProjectDTO.getId()));
 			}
 		});
-        
-        //Creates a blank space between the tabs'links and the buttons
-        final HBoxLayoutData flex = new HBoxLayoutData();
-        flex.setFlex(1);
-        this.view.getTabPanel().add(new Anchor(), flex);
-        
-        this.view.getTabPanel().add(exportAnchor,layoutData);  
-        this.view.getTabPanel().add(exportForm.getExportForm());  
-        
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.DELETE_PROJECT)) {
-            final HBoxLayoutData deleteLayoutData = new HBoxLayoutData();
-            deleteLayoutData.setMargins(new Margins(0, 0, 0, 0));
+		// Creates a blank space between the tabs'links and the buttons
+		final HBoxLayoutData flex = new HBoxLayoutData();
+		flex.setFlex(1);
+		this.view.getTabPanel().add(new Anchor(), flex);
 
-            final Button deleteAnchor = new Button(I18N.CONSTANTS.deleteProjectAnchor(), IconImageBundle.ICONS.remove());
-            deleteAnchor.setHeight("22px");
-            deleteAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
+		this.view.getTabPanel().add(exportAnchor, layoutData);
+		this.view.getTabPanel().add(exportForm.getExportForm());
 
-                @Override
-                public void componentSelected(ButtonEvent event) {
-                    MessageBox.confirm(I18N.CONSTANTS.confirmDeleteProjectMessageBoxTitle(), I18N.CONSTANTS.confirmDeleteProjectMessageBoxContent(),
-                        new Listener<MessageBoxEvent>() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.DELETE_PROJECT)) {
+			final HBoxLayoutData deleteLayoutData = new HBoxLayoutData();
+			deleteLayoutData.setMargins(new Margins(0, 0, 0, 0));
 
-                            @Override
-                            public void handleEvent(MessageBoxEvent be) {
-                                Button selectedButton = be.getButtonClicked();
-                                if (selectedButton.getItemId().equals(Dialog.YES)) {
-                                    Map<String, Object> changes = new HashMap<String, Object>();
-                                    changes.put("dateDeleted", new Date());
-                                    UpdateEntity updateEntity = new UpdateEntity(currentProjectDTO, changes);
-                                    dispatcher.execute(updateEntity, null, new AsyncCallback<VoidResult>() {
+			final Button deleteAnchor = new Button(I18N.CONSTANTS.deleteProjectAnchor(), IconImageBundle.ICONS.remove());
+			deleteAnchor.setHeight("22px");
+			deleteAnchor.addSelectionListener(new SelectionListener<ButtonEvent>() {
 
-                                        @Override
-                                        public void onFailure(Throwable arg0) {
-                                            // TODO Auto-generated method stub
+				@Override
+				public void componentSelected(ButtonEvent event) {
+					MessageBox.confirm(I18N.CONSTANTS.confirmDeleteProjectMessageBoxTitle(),
+									I18N.CONSTANTS.confirmDeleteProjectMessageBoxContent(),
+									new Listener<MessageBoxEvent>() {
 
-                                        }
+										@Override
+										public void handleEvent(MessageBoxEvent be) {
+											Button selectedButton = be.getButtonClicked();
+											if (selectedButton.getItemId().equals(Dialog.YES)) {
+												Map<String, Object> changes = new HashMap<String, Object>();
+												changes.put("dateDeleted", new Date());
+												UpdateEntity updateEntity = new UpdateEntity(currentProjectDTO, changes);
+												dispatcher.execute(updateEntity, null, new AsyncCallback<VoidResult>() {
 
-                                        @Override
-                                        public void onSuccess(VoidResult arg0) {
-                                            ProjectPresenter.this.eventBus.fireEvent(AppEvents.DeleteProject,
-                                                new ProjectEvent(AppEvents.DeleteProject,
-                                                    ProjectPresenter.this.currentProjectDTO.getId()));
-                                            Notification.show(I18N.CONSTANTS.deleteProjectNotificationTitle(), I18N.CONSTANTS.deleteProjectNotificationContent());
-                                        }
-                                    });
-                                }
+													@Override
+													public void onFailure(Throwable arg0) {
+														// TODO Auto-generated
+														// method stub
 
-                            }
-                        });
-                }
-            });
+													}
 
-            this.view.getTabPanel().add(deleteAnchor);
-        }
-    }
-    
-    private CheckBox createCheckBox( String label) {
-        CheckBox box = new CheckBox();
-         box.setBoxLabel(label);
-        return box;
-    }
+													@Override
+													public void onSuccess(VoidResult arg0) {
+														ProjectPresenter.this.eventBus
+																		.fireEvent(AppEvents.DeleteProject,
+																						new ProjectEvent(
+																										AppEvents.DeleteProject,
+																										ProjectPresenter.this.currentProjectDTO
+																														.getId()));
+														Notification.show(
+																		I18N.CONSTANTS.deleteProjectNotificationTitle(),
+																		I18N.CONSTANTS.deleteProjectNotificationContent());
+													}
+												});
+											}
 
+										}
+									});
+				}
+			});
 
-    private void selectTab(int index, boolean force) {
-        final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
+			this.view.getTabPanel().add(deleteAnchor);
+		}
+	}
 
-        if (currentTab != anchor) {
-            if (currentTab != null)
-                currentTab.toggleAnchorMode();
+	private CheckBox createCheckBox(String label) {
+		CheckBox box = new CheckBox();
+		box.setBoxLabel(label);
+		return box;
+	}
 
-            anchor.toggleAnchorMode();
-            currentTab = anchor;
-            ProjectPresenter.this.view.setMainPanel(presenters[index].getView());
-            presenters[index].viewDidAppear();
-        } else if (force) {
-            ProjectPresenter.this.view.setMainPanel(presenters[index].getView());
-            presenters[index].viewDidAppear();
-        }
-    }
+	private void selectTab(int index, boolean force) {
 
-    @Override
-    public boolean navigate(final PageState place) {
-        final ProjectState projectState = (ProjectState) place;
-        final int projectId = projectState.getProjectId();
+		if (index >= presenters.size())
+			return;
+		final ToggleAnchor anchor = (ToggleAnchor) this.view.getTabPanel().getWidget(index);
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
+		if (currentTab != anchor) {
+			if (currentTab != null)
+				currentTab.toggleAnchorMode();
 
-            view.sufficient();
+			anchor.toggleAnchorMode();
+			currentTab = anchor;
+			ProjectPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		} else if (force) {
+			ProjectPresenter.this.view.setMainPanel(presenters.get(index).getView());
+			presenters.get(index).viewDidAppear();
+		}
+	}
 
-            if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
-                if (Log.isDebugEnabled()) {
-                    Log.debug("Loading project #" + projectId + "...");
-                }
+	@Override
+	public boolean navigate(final PageState place) {
+		final ProjectState projectState = (ProjectState) place;
+		final int projectId = projectState.getProjectId();
 
-                dispatcher.execute(new GetProject(projectId), null, new AsyncCallback<ProjectDTO>() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_PROJECT)) {
 
-                    @Override
-                    public void onFailure(Throwable throwable) {
-                        Log.error("Error, project #" + projectId + " not loaded.");
-                    }
+			view.sufficient();
 
-                    @Override
-                    public void onSuccess(ProjectDTO projectDTO) {
+			if (currentProjectDTO == null || projectId != currentProjectDTO.getId()) {
+				if (Log.isDebugEnabled()) {
+					Log.debug("Loading project #" + projectId + "...");
+				}
 
-                        if (projectDTO == null) {
-                            Log.error("Project not loaded : " + projectId);
-                            view.insufficient();
-                        } else {
+				dispatcher.execute(new GetProject(projectId), null, new AsyncCallback<ProjectDTO>() {
 
-                            if (Log.isDebugEnabled()) {
-                                Log.debug("Project loaded : " + projectDTO.getName());
-                            }
+					@Override
+					public void onFailure(Throwable throwable) {
+						Log.error("Error, project #" + projectId + " not loaded.");
+					}
 
-                            currentState = projectState;
+					@Override
+					public void onSuccess(ProjectDTO projectDTO) {
 
-                            boolean projectChanged = !projectDTO.equals(currentProjectDTO);
+						if (projectDTO == null) {
+							Log.error("Project not loaded : " + projectId);
+							view.insufficient();
+						} else {
 
-                            projectState.setTabTitle(projectDTO.getName());
-                            loadProjectOnView(projectDTO);
+							if (Log.isDebugEnabled()) {
+								Log.debug("Project loaded : " + projectDTO.getName());
+							}
 
-                            selectTab(projectState.getCurrentSection(), projectChanged);
-                        }
-                    }
-                });
-            } else {
-                boolean change = false;
+							currentState = projectState;
 
-                if (!currentState.equals(projectState)) {
-                    change = true;
-                    currentState = projectState;
-                }
+							boolean projectChanged = !projectDTO.equals(currentProjectDTO);
 
-                selectTab(projectState.getCurrentSection(), change);
-            }
-        } else {
-            view.insufficient();
-        }
+							projectState.setTabTitle(projectDTO.getName());
+							loadProjectOnView(projectDTO);
 
-        return true;
-    }
+							selectTab(projectState.getCurrentSection(), projectChanged);
+						}
+					}
+				});
+			} else {
+				boolean change = false;
 
-    /**
-     * Loads a {@link ProjectDTO} object on the view.
-     * 
-     * @param projectDTO
-     *            the {@link ProjectDTO} object loaded on the viewprojectIndicators
-     */
-    private void loadProjectOnView(ProjectDTO projectDTO) {
-        currentProjectDTO = projectDTO;
-        currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
+				if (!currentState.equals(projectState)) {
+					change = true;
+					currentState = projectState;
+				}
 
-        refreshBanner();
-        refreshAmendment();
+				selectTab(projectState.getCurrentSection(), change);
+			}
+		} else {
+			view.insufficient();
+		}
 
-        for (SubPresenter presenter : presenters) {
-            if (presenter instanceof ProjectSubPresenter) {
-                ((ProjectSubPresenter) presenter).loadProject(projectDTO);
-            }
-        }
+		return true;
+	}
 
-    }
+	/**
+	 * Loads a {@link ProjectDTO} object on the view.
+	 * 
+	 * @param projectDTO
+	 *            the {@link ProjectDTO} object loaded on the
+	 *            viewprojectIndicators
+	 */
+	private void loadProjectOnView(ProjectDTO projectDTO) {
+		currentProjectDTO = projectDTO;
+		currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
 
-    public void ReloadProjectOnView(ProjectDTO projectDTO) {
-        currentProjectDTO = projectDTO;
-        currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
+		refreshBanner();
+		refreshAmendment();
 
-        refreshBanner();
-        refreshAmendment();
+		for (SubPresenter presenter : presenters) {
+			if (presenter instanceof ProjectSubPresenter) {
+				((ProjectSubPresenter) presenter).loadProject(projectDTO);
+			}
+		}
 
-        for (SubPresenter presenter : presenters) {
-            if (presenter instanceof ProjectSubPresenter) {
-                ((ProjectSubPresenter) presenter).loadProject(projectDTO);
-            }
-        }
-    }
+	}
 
-    public ProjectDTO getCurrentProjectDTO() {
-        return currentProjectDTO;
-    }
+	public void ReloadProjectOnView(ProjectDTO projectDTO) {
+		currentProjectDTO = projectDTO;
+		currentDisplayedPhaseDTO = projectDTO.getCurrentPhaseDTO();
 
-    public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
-        this.currentProjectDTO = currentProjectDTO;
-    }
+		refreshBanner();
+		refreshAmendment();
 
-    public PhaseDTO getCurrentDisplayedPhaseDTO() {
-        return currentDisplayedPhaseDTO;
-    }
+		for (SubPresenter presenter : presenters) {
+			if (presenter instanceof ProjectSubPresenter) {
+				((ProjectSubPresenter) presenter).loadProject(projectDTO);
+			}
+		}
+	}
 
-    public void setCurrentDisplayedPhaseDTO(PhaseDTO currentPhaseDTO) {
-        this.currentDisplayedPhaseDTO = currentPhaseDTO;
-    }
+	public ProjectDTO getCurrentProjectDTO() {
+		return currentProjectDTO;
+	}
 
-    /**
-     * Refreshes the project banner for the current project.
-     */
-    public void refreshBanner() {
+	public void setCurrentProjectDTO(ProjectDTO currentProjectDTO) {
+		this.currentProjectDTO = currentProjectDTO;
+	}
 
-        // Panel.
-        final ContentPanel panel = view.getPanelProjectBanner();
+	public PhaseDTO getCurrentDisplayedPhaseDTO() {
+		return currentDisplayedPhaseDTO;
+	}
 
-        // Set the heading of panel
-        String projectTitle = currentProjectDTO.getFullName();
-        String titleToDisplay = "";
-        if (projectTitle != null && !projectTitle.isEmpty())
-            titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 110) + "..." : projectTitle;
+	public void setCurrentDisplayedPhaseDTO(PhaseDTO currentPhaseDTO) {
+		this.currentDisplayedPhaseDTO = currentPhaseDTO;
+	}
 
-        panel.setHeading(I18N.CONSTANTS.projectMainTabTitle()
-            + ' '
-            + currentProjectDTO.getName()
-            + " ("
-            + titleToDisplay
-            + ")");
+	/**
+	 * Refreshes the project banner for the current project.
+	 */
+	public void refreshBanner() {
 
-        // Set the tool tip
-        ToolTipConfig panelToolTipconfig = new ToolTipConfig();
-        panelToolTipconfig.setMaxWidth(500);
-        panelToolTipconfig.setText(projectTitle);
-        panel.setToolTip(panelToolTipconfig);
+		// Panel.
+		final ContentPanel panel = view.getPanelProjectBanner();
 
-        panel.removeAll();
+		// Set the heading of panel
+		String projectTitle = currentProjectDTO.getFullName();
+		String titleToDisplay = "";
+		if (projectTitle != null && !projectTitle.isEmpty())
+			titleToDisplay = projectTitle.length() > 110 ? projectTitle.substring(0, 110) + "..." : projectTitle;
 
-        final Grid gridPanel = new Grid(1, 2);
-        gridPanel.addStyleName("banner");
-        gridPanel.setCellPadding(0);
-        gridPanel.setCellSpacing(0);
-        gridPanel.setWidth("100%");
-        gridPanel.setHeight("100%");
+		panel.setHeading(I18N.CONSTANTS.projectMainTabTitle() + ' ' + currentProjectDTO.getName() + " ("
+						+ titleToDisplay + ")");
 
-        // Logo.
-        final Image logo =
-                FundingIconProvider.getProjectTypeIcon(
-                    currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
-                    FundingIconProvider.IconSize.LARGE).createImage();
-        gridPanel.setWidget(0, 0, logo);
-        gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
+		// Set the tool tip
+		ToolTipConfig panelToolTipconfig = new ToolTipConfig();
+		panelToolTipconfig.setMaxWidth(500);
+		panelToolTipconfig.setText(projectTitle);
+		panel.setToolTip(panelToolTipconfig);
 
-        // Banner.
-        final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
-        final LayoutDTO layout = banner.getLayoutDTO();
+		panel.removeAll();
 
-        // Executes layout.
-        if (banner != null
-            && layout != null
-            && layout.getLayoutGroupsDTO() != null
-            && !layout.getLayoutGroupsDTO().isEmpty()) {
+		final Grid gridPanel = new Grid(1, 2);
+		gridPanel.addStyleName("banner");
+		gridPanel.setCellPadding(0);
+		gridPanel.setCellSpacing(0);
+		gridPanel.setWidth("100%");
+		gridPanel.setHeight("100%");
 
-            // For visibility constraints, the banner accept a maximum of 2 rows
-            // and 4 columns.
-            final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
-            final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
+		// Logo.
+		final Image logo = FundingIconProvider.getProjectTypeIcon(
+						currentProjectDTO.getProjectModelDTO().getVisibility(authentication.getOrganizationId()),
+						FundingIconProvider.IconSize.LARGE).createImage();
+		gridPanel.setWidget(0, 0, logo);
+		gridPanel.getCellFormatter().addStyleName(0, 0, "banner-logo");
 
-            final Grid gridLayout = new Grid(rows, cols);
-            gridLayout.addStyleName("banner-flex");
-            gridLayout.setCellPadding(0);
-            gridLayout.setCellSpacing(0);
-            gridLayout.setWidth("100%");
-            gridLayout.setHeight("100%");
+		// Banner.
+		final ProjectBannerDTO banner = currentProjectDTO.getProjectModelDTO().getProjectBannerDTO();
+		final LayoutDTO layout = banner.getLayoutDTO();
 
-            for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
-                gridLayout.getColumnFormatter().setWidth(i, "325px");
-            }
+		// Executes layout.
+		if (banner != null && layout != null && layout.getLayoutGroupsDTO() != null
+						&& !layout.getLayoutGroupsDTO().isEmpty()) {
 
-            for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
+			// For visibility constraints, the banner accept a maximum of 2 rows
+			// and 4 columns.
+			final int rows = layout.getRowsCount() > 2 ? 2 : layout.getRowsCount();
+			final int cols = layout.getColumnsCount() > 4 ? 4 : layout.getColumnsCount();
 
-                // Checks group bounds.
-                if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
-                    continue;
-                }
+			final Grid gridLayout = new Grid(rows, cols);
+			gridLayout.addStyleName("banner-flex");
+			gridLayout.setCellPadding(0);
+			gridLayout.setCellSpacing(0);
+			gridLayout.setWidth("100%");
+			gridLayout.setHeight("100%");
 
-                final ContentPanel groupPanel = new ContentPanel();
-                groupPanel.setLayout(new FormLayout());
-                groupPanel.setTopComponent(null);
-                groupPanel.setHeaderVisible(false);
+			for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
+				gridLayout.getColumnFormatter().setWidth(i, "325px");
+			}
 
-                gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
+			for (final LayoutGroupDTO groupLayout : layout.getLayoutGroupsDTO()) {
 
-                if (groupLayout.getLayoutConstraintsDTO() != null) {
-                    for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
+				// Checks group bounds.
+				if (groupLayout.getRow() + 1 > rows || groupLayout.getColumn() + 1 > cols) {
+					continue;
+				}
 
-                        final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
+				final ContentPanel groupPanel = new ContentPanel();
+				groupPanel.setLayout(new FormLayout());
+				groupPanel.setTopComponent(null);
+				groupPanel.setHeaderVisible(false);
 
-                        // Only default elements are allowed.
-                        if (!(element instanceof DefaultFlexibleElementDTO)) {
-                            continue;
-                        }
+				gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
 
-                        // Builds the graphic component
-                        final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
-                        defaultElement.setService(dispatcher);
-                        defaultElement.setAuthentication(authentication);
-                        defaultElement.setCache(cache);
-                        defaultElement.setCurrentContainerDTO(currentProjectDTO);
+				if (groupLayout.getLayoutConstraintsDTO() != null) {
+					for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
 
-                        final Component component = defaultElement.getElementComponentInBanner(null);
+						final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
 
-                        if (component != null) {
+						// Only default elements are allowed.
+						if (!(element instanceof DefaultFlexibleElementDTO)) {
+							continue;
+						}
 
-                            if (component instanceof LabelField) {
-                                LabelField lableFieldComponent = (LabelField) component;
-                                // Get the text of the field
-                                String textValue = lableFieldComponent.getText();
+						// Builds the graphic component
+						final DefaultFlexibleElementDTO defaultElement = (DefaultFlexibleElementDTO) element;
+						defaultElement.setService(dispatcher);
+						defaultElement.setAuthentication(authentication);
+						defaultElement.setCache(cache);
+						defaultElement.setCurrentContainerDTO(currentProjectDTO);
 
-                                // Set the tool tip
-                                ToolTipConfig config = new ToolTipConfig();
-                                config.setMaxWidth(500);
-                                config.setText(textValue);
-                                lableFieldComponent.setToolTip(config);
+						final Component component = defaultElement.getElementComponentInBanner(null);
 
-                                // Clip the text if it is longer than 30
-                                if (textValue != null && !textValue.isEmpty()) {
-                                    String newTextValue =
-                                            textValue.length() > 30 ? textValue.substring(0, 29) + "..." : textValue;
-                                    lableFieldComponent.setText(newTextValue);
-                                }
-                                groupPanel.add(lableFieldComponent);
-                            } else {
-                                groupPanel.add(component);
-                            }
+						if (component != null) {
 
-                        }
+							if (component instanceof LabelField) {
+								LabelField lableFieldComponent = (LabelField) component;
+								// Get the text of the field
+								String textValue = lableFieldComponent.getText();
 
-                        // Only one element per cell.
-                        break;
-                    }
-                }
-            }
+								// Set the tool tip
+								ToolTipConfig config = new ToolTipConfig();
+								config.setMaxWidth(500);
+								config.setText(textValue);
+								lableFieldComponent.setToolTip(config);
 
-            gridPanel.setWidget(0, 1, gridLayout);
-        }
-        // Default banner.
-        else {
+								// Clip the text if it is longer than 30
+								if (textValue != null && !textValue.isEmpty()) {
+									String newTextValue = textValue.length() > 30 ? textValue.substring(0, 29) + "..."
+													: textValue;
+									lableFieldComponent.setText(newTextValue);
+								}
+								groupPanel.add(lableFieldComponent);
+							} else {
+								groupPanel.add(component);
+							}
 
-            panel.setLayout(new FormLayout());
+						}
 
-            final LabelField codeField = new LabelField();
-            codeField.setReadOnly(true);
-            codeField.setFieldLabel(I18N.CONSTANTS.projectName());
-            codeField.setLabelSeparator(":");
-            codeField.setValue(currentProjectDTO.getName());
+						// Only one element per cell.
+						break;
+					}
+				}
+			}
 
-            gridPanel.setWidget(0, 1, codeField);
-        }
+			gridPanel.setWidget(0, 1, gridLayout);
+		}
+		// Default banner.
+		else {
 
-        panel.add(gridPanel);
-        panel.layout();
-    }
+			panel.setLayout(new FormLayout());
 
-    private void refreshAmendment() {
-        Log.debug("Loading amendments for project '" + currentProjectDTO.getName() + "'...");
+			final LabelField codeField = new LabelField();
+			codeField.setReadOnly(true);
+			codeField.setFieldLabel(I18N.CONSTANTS.projectName());
+			codeField.setLabelSeparator(":");
+			codeField.setValue(currentProjectDTO.getName());
 
-        final ContentPanel amendmentBox = view.getAmendmentBox();
-        amendmentBox.removeAll();
+			gridPanel.setWidget(0, 1, codeField);
+		}
 
-        // Prepare the amendment store
-        final ListStore<AmendmentDTO> store = new ListStore<AmendmentDTO>();
+		panel.add(gridPanel);
+		panel.layout();
+	}
 
-        for (final AmendmentDTO amendmentDTO : currentProjectDTO.getAmendments()) {
-            amendmentDTO.prepareName();
-            store.add(amendmentDTO);
-        }
+	private void refreshAmendment() {
+		Log.debug("Loading amendments for project '" + currentProjectDTO.getName() + "'...");
 
-        // Adding the current amendment
-        final AmendmentDTO currentAmendment = new AmendmentDTO(currentProjectDTO);
-        store.add(currentAmendment);
+		final ContentPanel amendmentBox = view.getAmendmentBox();
+		amendmentBox.removeAll();
 
-        // Creating the amendment list
-        final ComboBox<AmendmentDTO> versionList = new ComboBox<AmendmentDTO>();
-        versionList.setStore(store);
-        versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
+		// Prepare the amendment store
+		final ListStore<AmendmentDTO> store = new ListStore<AmendmentDTO>();
 
-        versionList.setValue(currentAmendment); // Selecting the
-                                                // currentAmendment
+		for (final AmendmentDTO amendmentDTO : currentProjectDTO.getAmendments()) {
+			amendmentDTO.prepareName();
+			store.add(amendmentDTO);
+		}
 
-        Log.debug(store.getCount() + " amendment(s).");
+		// Adding the current amendment
+		final AmendmentDTO currentAmendment = new AmendmentDTO(currentProjectDTO);
+		store.add(currentAmendment);
 
-        final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
-        displayAmendmentButton.setEnabled(false);
+		// Creating the amendment list
+		final ComboBox<AmendmentDTO> versionList = new ComboBox<AmendmentDTO>();
+		versionList.setStore(store);
+		versionList.setTriggerAction(ComboBox.TriggerAction.ALL);
 
-        versionList.addSelectionChangedListener(new SelectionChangedListener<AmendmentDTO>() {
+		versionList.setValue(currentAmendment); // Selecting the
+												// currentAmendment
 
-            @Override
-            public void selectionChanged(SelectionChangedEvent<AmendmentDTO> se) {
-                int currentAmendmentId = 0;
-                if (currentProjectDTO.getCurrentAmendment() != null)
-                    currentAmendmentId = currentProjectDTO.getCurrentAmendment().getId();
+		Log.debug(store.getCount() + " amendment(s).");
 
-                Log.debug("Current " + currentAmendmentId + " / Selected " + se.getSelectedItem().getId());
+		final Button displayAmendmentButton = new Button(I18N.CONSTANTS.amendmentDisplay());
+		displayAmendmentButton.setEnabled(false);
 
-                displayAmendmentButton.setEnabled(se.getSelectedItem().getId() != currentAmendmentId);
-            }
-        });
+		versionList.addSelectionChangedListener(new SelectionChangedListener<AmendmentDTO>() {
 
-        displayAmendmentButton.addSelectionListener(new SelectionListener<ButtonEvent>() {
+			@Override
+			public void selectionChanged(SelectionChangedEvent<AmendmentDTO> se) {
+				int currentAmendmentId = 0;
+				if (currentProjectDTO.getCurrentAmendment() != null)
+					currentAmendmentId = currentProjectDTO.getCurrentAmendment().getId();
 
-            @Override
-            public void componentSelected(ButtonEvent ce) {
-                NavigationCallback navigationCallback = new NavigationCallback() {
+				Log.debug("Current " + currentAmendmentId + " / Selected " + se.getSelectedItem().getId());
 
-                    @Override
-                    public void onDecided(NavigationError navigationError) {
-                        if (navigationError == NavigationError.NONE) {
-                            AmendmentDTO amendmentDTO = versionList.getSelection().get(0);
-                            if (amendmentDTO.getId() == 0)
-                                amendmentDTO = null;
-                            else
-                                Log.debug("Back to " + amendmentDTO.getId());
+				displayAmendmentButton.setEnabled(se.getSelectedItem().getId() != currentAmendmentId);
+			}
+		});
 
-                            currentProjectDTO.setCurrentAmendment(amendmentDTO);
+		displayAmendmentButton.addSelectionListener(new SelectionListener<ButtonEvent>() {
 
-                            // Refreshing the whole view
-                            discardAllViews();
-                            selectTab(currentState.getCurrentSection(), true);
-                            displayAmendmentButton.setEnabled(false);
-                        }
-                    }
+			@Override
+			public void componentSelected(ButtonEvent ce) {
+				NavigationCallback navigationCallback = new NavigationCallback() {
 
-                };
-                requestToNavigateAway(null, navigationCallback);
-            }
-        });
+					@Override
+					public void onDecided(NavigationError navigationError) {
+						if (navigationError == NavigationError.NONE) {
+							AmendmentDTO amendmentDTO = versionList.getSelection().get(0);
+							if (amendmentDTO.getId() == 0)
+								amendmentDTO = null;
+							else
+								Log.debug("Back to " + amendmentDTO.getId());
 
-        final LayoutContainer amendmentListContainer = new LayoutContainer(new HBoxLayout());
-        amendmentListContainer.add(versionList);
-        amendmentListContainer.add(displayAmendmentButton, new HBoxLayoutData(0, 0, 0, 4));
+							currentProjectDTO.setCurrentAmendment(amendmentDTO);
 
-        amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
+							// Refreshing the whole view
+							discardAllViews();
+							selectTab(currentState.getCurrentSection(), true);
+							displayAmendmentButton.setEnabled(false);
+						}
+					}
 
-        if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
+				};
+				requestToNavigateAway(null, navigationCallback);
+			}
+		});
 
-            // Displaying the available actions
-            final Amendment.Action[] actions;
-            if (currentProjectDTO.getAmendmentState() != null)
-                actions = currentProjectDTO.getAmendmentState().getActions();
-            else
-                actions = new Amendment.Action[0];
-            final Anchor[] anchors = new Anchor[actions.length];
+		final LayoutContainer amendmentListContainer = new LayoutContainer(new HBoxLayout());
+		amendmentListContainer.add(versionList);
+		amendmentListContainer.add(displayAmendmentButton, new HBoxLayoutData(0, 0, 0, 4));
 
-            for (int index = 0; index < actions.length; index++) {
-                final Amendment.Action action = actions[index];
-                Log.debug("Adding the " + action + " amendment action.");
+		amendmentBox.add(amendmentListContainer, new VBoxLayoutData(0, 0, 3, 0));
 
-                if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
-                    if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
-                        Log.debug("You can not validate !");
-                        continue;
-                    }
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_PROJECT)) {
 
-                }
+			// Displaying the available actions
+			final Amendment.Action[] actions;
+			if (currentProjectDTO.getAmendmentState() != null)
+				actions = currentProjectDTO.getAmendmentState().getActions();
+			else
+				actions = new Amendment.Action[0];
+			final Anchor[] anchors = new Anchor[actions.length];
 
-                Log.debug("You can  validate !");
+			for (int index = 0; index < actions.length; index++) {
+				final Amendment.Action action = actions[index];
+				Log.debug("Adding the " + action + " amendment action.");
 
-                final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
-                actionAnchor.addStyleName("amendment-action");
+				if (action == Amendment.Action.VALIDATE || action == Amendment.Action.REJECT) {
+					if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VALID_AMENDEMENT)) {
+						Log.debug("You can not validate !");
+						continue;
+					}
 
-                actionAnchor.addClickHandler(new ClickHandler() {
+				}
 
-                    @Override
-                    public void onClick(ClickEvent event) {
-                        // Disabling every actions before sending the request
+				Log.debug("You can  validate !");
 
-                        NavigationCallback navigationCallback = new NavigationCallback() {
+				final Anchor actionAnchor = new Anchor(amendmentActionDisplayNames.get(action));
+				actionAnchor.addStyleName("amendment-action");
 
-                            @Override
-                            public void onDecided(NavigationError navigationError) {
-                                // TODO Auto-generated method stub
-                                if (navigationError == NavigationError.NONE) {
-                                    amendmentBox.mask(I18N.CONSTANTS.loading());
+				actionAnchor.addClickHandler(new ClickHandler() {
 
-                                    for (final Anchor anchor : anchors) {
-                                        if (anchor == null)
-                                            Log.debug("anchor is null");
-                                        if (anchor != null)
-                                            anchor.setEnabled(false);
-                                    }
+					@Override
+					public void onClick(ClickEvent event) {
+						// Disabling every actions before sending the request
 
-                                    final AmendmentAction amendmentAction =
-                                            new AmendmentAction(currentProjectDTO.getId(), action);
-                                    dispatcher.execute(amendmentAction, null, new AsyncCallback<ProjectDTO>() {
+						NavigationCallback navigationCallback = new NavigationCallback() {
 
-                                        @Override
-                                        public void onFailure(Throwable caught) {
-                                            // Failures may happen if an other user changes
-                                            // the
-                                            // amendment state.
-                                            // TODO: we should maybe refresh the project or
-                                            // tell
-                                            // the user to refresh the page.
-                                            MessageBox.alert(amendmentActionDisplayNames.get(action),
-                                                I18N.CONSTANTS.amendmentActionError(), null);
-                                            for (final Anchor anchor : anchors)
-                                                anchor.setEnabled(true);
-                                            amendmentBox.unmask();
-                                        }
+							@Override
+							public void onDecided(NavigationError navigationError) {
+								// TODO Auto-generated method stub
+								if (navigationError == NavigationError.NONE) {
+									amendmentBox.mask(I18N.CONSTANTS.loading());
 
-                                        @Override
-                                        public void onSuccess(ProjectDTO result) {
-                                            for (final Anchor anchor : anchors) {
-                                                if (anchor != null)
-                                                    anchor.setEnabled(true);
-                                            }
+									for (final Anchor anchor : anchors) {
+										if (anchor == null)
+											Log.debug("anchor is null");
+										if (anchor != null)
+											anchor.setEnabled(false);
+									}
 
-                                            // Updating the current project
-                                            currentProjectDTO = result;
+									final AmendmentAction amendmentAction = new AmendmentAction(currentProjectDTO
+													.getId(), action);
+									dispatcher.execute(amendmentAction, null, new AsyncCallback<ProjectDTO>() {
 
-                                            // Refreshing the whole view
-                                            discardAllViews();
-                                            selectTab(currentState.getCurrentSection(), true);
-                                            refreshAmendment();
+										@Override
+										public void onFailure(Throwable caught) {
+											// Failures may happen if an other
+											// user changes
+											// the
+											// amendment state.
+											// TODO: we should maybe refresh the
+											// project or
+											// tell
+											// the user to refresh the page.
+											MessageBox.alert(amendmentActionDisplayNames.get(action),
+															I18N.CONSTANTS.amendmentActionError(), null);
+											for (final Anchor anchor : anchors)
+												anchor.setEnabled(true);
+											amendmentBox.unmask();
+										}
 
-                                            amendmentBox.unmask();
-                                        }
-                                    });
-                                }
-                            }
-                        };
-                        requestToNavigateAway(null, navigationCallback);
-                    }
+										@Override
+										public void onSuccess(ProjectDTO result) {
+											for (final Anchor anchor : anchors) {
+												if (anchor != null)
+													anchor.setEnabled(true);
+											}
 
-                });
+											// Updating the current project
+											currentProjectDTO = result;
 
-                amendmentBox.add(actionAnchor, new VBoxLayoutData());
-                anchors[index] = actionAnchor;
+											// Refreshing the whole view
+											discardAllViews();
+											selectTab(currentState.getCurrentSection(), true);
+											refreshAmendment();
 
-            }
+											amendmentBox.unmask();
+										}
+									});
+								}
+							}
+						};
+						requestToNavigateAway(null, navigationCallback);
+					}
 
-        }
+				});
 
-        amendmentBox.layout();
-    }
+				amendmentBox.add(actionAnchor, new VBoxLayoutData());
+				anchors[index] = actionAnchor;
 
-    private void discardAllViews() {
-        for (final SubPresenter presenter : presenters)
-            presenter.discardView();
-    }
+			}
 
-    @Override
-    public String getTabTitle() {
-        return I18N.CONSTANTS.projectMainTabTitle();
-    }
+		}
 
-    @Override
-    public PageId getPageId() {
-        return PAGE_ID;
-    }
+		amendmentBox.layout();
+	}
 
-    @Override
-    public Object getWidget() {
-        return view;
-    }
+	private void discardAllViews() {
+		for (final SubPresenter presenter : presenters)
+			presenter.discardView();
+	}
 
-    @Override
-    public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
-        NavigationError navigationError = NavigationError.NONE;
-        for (SubPresenter subPresenter : presenters) {
-            if (subPresenter.hasValueChanged()) {
-                navigationError = NavigationError.WORK_NOT_SAVED;
-            }
-        }
+	@Override
+	public String getTabTitle() {
+		return I18N.CONSTANTS.projectMainTabTitle();
+	}
 
-        Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
+	@Override
+	public PageId getPageId() {
+		return PAGE_ID;
+	}
 
-            @Override
-            public void handleEvent(MessageBoxEvent be) {
-                if (be.getButtonClicked().getItemId().equals(Dialog.YES)) {
-                    for (SubPresenter subPresenter : presenters) {
-                        subPresenter.forgetAllChangedValues();
-                    }
-                    callback.onDecided(NavigationError.NONE);
-                }
-            }
-        };
+	@Override
+	public Object getWidget() {
+		return view;
+	}
 
-        if (navigationError == NavigationError.WORK_NOT_SAVED) {
-            MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
-        }
+	@Override
+	public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
+		NavigationError navigationError = NavigationError.NONE;
+		for (SubPresenter subPresenter : presenters) {
+			if (subPresenter.hasValueChanged()) {
+				navigationError = NavigationError.WORK_NOT_SAVED;
+			}
+		}
 
-        callback.onDecided(navigationError);
-    }
+		Listener<MessageBoxEvent> listener = new Listener<MessageBoxEvent>() {
 
-    @Override
-    public String beforeWindowCloses() {
-        return null;
-    }
+			@Override
+			public void handleEvent(MessageBoxEvent be) {
+				if (be.getButtonClicked().getItemId().equals(Dialog.YES)) {
+					for (SubPresenter subPresenter : presenters) {
+						subPresenter.forgetAllChangedValues();
+					}
+					callback.onDecided(NavigationError.NONE);
+				}
+			}
+		};
 
-    @Override
-    public void shutdown() {
-    }
+		if (navigationError == NavigationError.WORK_NOT_SAVED) {
+			MessageBox.confirm(I18N.CONSTANTS.unsavedDataTitle(), I18N.CONSTANTS.unsavedDataMessage(), listener);
+		}
 
-    @Override
-    public void setActivePage(Page page) {
-        this.activePage = page;
-    }
+		callback.onDecided(navigationError);
+	}
 
-    @Override
-    public Page getActivePage() {
-        return this.activePage;
-    }
+	@Override
+	public String beforeWindowCloses() {
+		return null;
+	}
 
-    public ProjectState getCurrentState() {
-        return currentState;
-    }
+	@Override
+	public void shutdown() {
+	}
 
-    @Override
-    public AsyncMonitor showLoadingPlaceHolder(PageId pageId, PageState loadingPlace) {
-        return null;
-    }
+	@Override
+	public void setActivePage(Page page) {
+		this.activePage = page;
+	}
 
+	@Override
+	public Page getActivePage() {
+		return this.activePage;
+	}
+
+	public ProjectState getCurrentState() {
+		return currentState;
+	}
+
+	@Override
+	public AsyncMonitor showLoadingPlaceHolder(PageId pageId, PageState loadingPlace) {
+		return null;
+	}
+
 }
Index: src/main/java/org/sigmah/client/page/project/design/ProjectIndicatorsContainer.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/design/ProjectIndicatorsContainer.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/project/design/ProjectIndicatorsContainer.java	(Arbeitskopie)
@@ -33,158 +33,160 @@
 
 public class ProjectIndicatorsContainer extends LayoutContainer implements ProjectSubPresenter {
 
-    private DesignPanel designPanel;
-    private final Dispatcher service;
-    private final EventBus eventBus;
+	private DesignPanel designPanel;
+	private final Dispatcher service;
+	private final EventBus eventBus;
 
-    private TabPanel tabPanel;
-    private TabItem mapTabItem;
-    private TabItem sitesTabItem;
+	private TabPanel tabPanel;
+	private TabItem mapTabItem;
+	private TabItem sitesTabItem;
 
-    private ProjectSiteGridPanel siteEditor;
-    private SiteMap siteMap;
+	private ProjectSiteGridPanel siteEditor;
+	private SiteMap siteMap;
 
-    private ProjectDTO project;
+	private ProjectDTO project;
 
-    @Inject
-    public ProjectIndicatorsContainer(ProjectSiteGridPanel siteEditor, SiteMap siteMap, final DesignPanel designPanel, Dispatcher service, EventBus eventBus) {
+	@Inject
+	public ProjectIndicatorsContainer(ProjectSiteGridPanel siteEditor, SiteMap siteMap, final DesignPanel designPanel,
+					Dispatcher service, EventBus eventBus) {
 
-        this.siteEditor = siteEditor;
-        this.siteMap = siteMap;
-        this.designPanel = designPanel;
-        this.designPanel.setHeaderVisible(false);
+		this.siteEditor = siteEditor;
+		this.siteMap = siteMap;
+		this.designPanel = designPanel;
+		this.designPanel.setHeaderVisible(false);
 
-        this.service = service;
-        this.eventBus = eventBus;
+		this.service = service;
+		this.eventBus = eventBus;
 
-        BorderLayout borderLayout = new BorderLayout();
-        borderLayout.setContainerStyle("x-border-layout-ct main-background");
-        setLayout(borderLayout);
+		BorderLayout borderLayout = new BorderLayout();
+		borderLayout.setContainerStyle("x-border-layout-ct main-background");
+		setLayout(borderLayout);
 
-        // setIcon(IconImageBundle.ICONS.design());
-        // map tab panel
-        tabPanel = new TabPanel();
-        tabPanel.setPlain(true);
+		// setIcon(IconImageBundle.ICONS.design());
+		// map tab panel
+		tabPanel = new TabPanel();
+		tabPanel.setPlain(true);
 
-        // map tab item
-        mapTabItem = new TabItem(I18N.CONSTANTS.map());
-        mapTabItem.setLayout(new FitLayout());
-        mapTabItem.setEnabled(false);
-        mapTabItem.setAutoHeight(true);
-        mapTabItem.setEnabled(true);
-        mapTabItem.add(siteMap);
-        tabPanel.add(mapTabItem);
+		// map tab item
+		mapTabItem = new TabItem(I18N.CONSTANTS.map());
+		mapTabItem.setLayout(new FitLayout());
+		mapTabItem.setEnabled(false);
+		mapTabItem.setAutoHeight(true);
+		mapTabItem.setEnabled(true);
+		mapTabItem.add(siteMap);
+		tabPanel.add(mapTabItem);
 
-        // sites tab item
-        sitesTabItem = new TabItem(I18N.CONSTANTS.sites());
-        sitesTabItem.setLayout(new FitLayout());
-        sitesTabItem.setEnabled(false);
-        sitesTabItem.setAutoHeight(true);
-        sitesTabItem.setEnabled(true);
-        sitesTabItem.add(siteEditor);
-        tabPanel.add(sitesTabItem);
+		// sites tab item
+		sitesTabItem = new TabItem(I18N.CONSTANTS.sites());
+		sitesTabItem.setLayout(new FitLayout());
+		sitesTabItem.setEnabled(false);
+		sitesTabItem.setAutoHeight(true);
+		sitesTabItem.setEnabled(true);
+		sitesTabItem.add(siteEditor);
+		tabPanel.add(sitesTabItem);
 
-        BorderLayoutData centerLayout = new BorderLayoutData(Style.LayoutRegion.CENTER);
-        centerLayout.setMargins(new Margins(0, 0, 0, 0));
-        centerLayout.setSplit(true);
-        centerLayout.setCollapsible(true);
+		BorderLayoutData centerLayout = new BorderLayoutData(Style.LayoutRegion.CENTER);
+		centerLayout.setMargins(new Margins(0, 0, 0, 0));
+		centerLayout.setSplit(true);
+		centerLayout.setCollapsible(true);
 
-        BorderLayoutData layout = new BorderLayoutData(Style.LayoutRegion.EAST);
-        layout.setSplit(true);
-        layout.setCollapsible(true);
-        layout.setSize(375);
-        layout.setMargins(new Margins(0, 0, 0, 5));
+		BorderLayoutData layout = new BorderLayoutData(Style.LayoutRegion.EAST);
+		layout.setSplit(true);
+		layout.setCollapsible(true);
+		layout.setSize(375);
+		layout.setMargins(new Margins(0, 0, 0, 5));
 
-        add(designPanel, centerLayout);
-        designPanel.getMappedIndicator().addValueChangeHandler(new ValueChangeHandler<IndicatorDTO>() {
+		add(designPanel, centerLayout);
+		designPanel.getMappedIndicator().addValueChangeHandler(new ValueChangeHandler<IndicatorDTO>() {
 
-            @Override
-            public void onValueChange(ValueChangeEvent<IndicatorDTO> event) {
-                onMappedIndicatorChanged(event.getValue());
-            }
-        });
+			@Override
+			public void onValueChange(ValueChangeEvent<IndicatorDTO> event) {
+				onMappedIndicatorChanged(event.getValue());
+			}
+		});
 
-        add(tabPanel, layout);
+		add(tabPanel, layout);
 
-        siteEditor.addActionListener(new Listener<ComponentEvent>() {
+		siteEditor.addActionListener(new Listener<ComponentEvent>() {
 
-            @Override
-            public void handleEvent(ComponentEvent be) {
-                if (UIActions.add.equals(be.getComponent().getItemId())) {
-                    addSite();
-                } else if (UIActions.edit.equals(be.getComponent().getItemId())) {
-                    editSite();
-                }
-            }
-        });
-    }
+			@Override
+			public void handleEvent(ComponentEvent be) {
+				if (UIActions.add.equals(be.getComponent().getItemId())) {
+					addSite();
+				} else if (UIActions.edit.equals(be.getComponent().getItemId())) {
+					editSite();
+				}
+			}
+		});
+	}
 
-    @Override
-    public void loadProject(ProjectDTO project) {
-        this.project = project;
+	@Override
+	public void loadProject(ProjectDTO project) {
+		this.project = project;
 
-        // load design panel
-        designPanel.load(project.getId());
+		// load design panel
+		designPanel.load(project.getId());
 
-        // load site grid
-        Filter siteFilter = new Filter();
-        siteFilter.addRestriction(DimensionType.Database, project.getId());
-        siteEditor.load(siteFilter);
-    }
+		// load site grid
+		Filter siteFilter = new Filter();
+		siteFilter.addRestriction(DimensionType.Database, project.getId());
+		siteEditor.load(siteFilter);
+	}
 
-    private void onMappedIndicatorChanged(IndicatorDTO value) {
-        Filter filter = new Filter();
-        filter.addRestriction(DimensionType.Indicator, value.getId());
-        filter.addRestriction(DimensionType.Database, project.getId());
+	private void onMappedIndicatorChanged(IndicatorDTO value) {
+		Filter filter = new Filter();
+		filter.addRestriction(DimensionType.Indicator, value.getId());
+		filter.addRestriction(DimensionType.Database, project.getId());
 
-        siteMap.loadSites(project.getCountry(), filter);
-    }
+		siteMap.loadSites(project.getCountry(), filter);
+	}
 
-    private void addSite() {
+	private void addSite() {
 
-        final int projectId = project.getId();
+		final int projectId = project.getId();
 
-        SiteDTO site = new SiteDTO();
-        site.setDatabaseId(projectId);
-        // site.setPartner(projectPresenter.getCurrentProjectDTO().getOrgUnitId());
+		SiteDTO site = new SiteDTO();
+		site.setDatabaseId(projectId);
+		// site.setPartner(projectPresenter.getCurrentProjectDTO().getOrgUnitId());
 
-        final SiteForm form = new SiteForm(service, project.getCountry());
+		final SiteForm form = new SiteForm(service, project.getCountry());
 
-        final SiteFormDialog dialog = new SiteFormDialog(eventBus, service, form);
-        dialog.create(site);
-    }
+		final SiteFormDialog dialog = new SiteFormDialog(eventBus, service, form);
+		dialog.create(site);
+	}
 
-    private void editSite() {
-        if (!siteEditor.getSelection().isEmpty()) {
-            SiteDTO site = siteEditor.getSelection().get(0);
-            final SiteForm form = new SiteForm(service, project.getCountry());
+	private void editSite() {
+		if (!siteEditor.getSelection().isEmpty()) {
+			SiteDTO site = siteEditor.getSelection().get(0);
+			final SiteForm form = new SiteForm(service, project.getCountry());
 
-            final SiteFormDialog dialog = new SiteFormDialog(eventBus, service, form);
-            dialog.edit(site);
-        }
-    }
+			final SiteFormDialog dialog = new SiteFormDialog(eventBus, service, form);
+			dialog.edit(site);
+		}
+	}
 
-    @Override
-    public Component getView() {
-        return (Component) this;
-    }
+	@Override
+	public Component getView() {
+		return (Component) this;
+	}
 
-    @Override
-    public void viewDidAppear() {
-    }
+	@Override
+	public void viewDidAppear() {
+	}
 
-    @Override
-    public void discardView() {
-    }
+	@Override
+	public void discardView() {
+	}
 
-    @Override
-    public boolean hasValueChanged() {
-        return (siteEditor.hasValueChanged() || designPanel.isIndicatorUpdated());
-    }
+	@Override
+	public boolean hasValueChanged() {
+		return (siteEditor.hasValueChanged() || designPanel.isIndicatorUpdated());
+	}
 
-    @Override
-    public void forgetAllChangedValues() {
-        siteEditor.setSiteUpdated(false);
-        designPanel.setIndicatorUpdated(false);
-    }
+	@Override
+	public void forgetAllChangedValues() {
+		siteEditor.setSiteUpdated(false);
+		designPanel.setIndicatorUpdated(false);
+	}
+
 }
Index: src/main/java/org/sigmah/client/page/project/logframe/grid/IndicatorListWidget.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/logframe/grid/IndicatorListWidget.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/project/logframe/grid/IndicatorListWidget.java	(Arbeitskopie)
@@ -33,28 +33,27 @@
 import com.google.gwt.user.client.ui.Grid;
 import com.google.gwt.user.client.ui.Label;
 
-public class IndicatorListWidget extends Composite implements
-		HasValueChangeHandlers<Void> {
+public class IndicatorListWidget extends Composite implements HasValueChangeHandlers<Void> {
 
 	private final Dispatcher dispatcher;
 	private final LogFrameElementDTO element;
 	private final int databaseId;
-	
+
 	private final String clickAbleStyle = "logframe-grid-code-label-active";
 	private FormDialogImpl<IndicatorForm> dialog;
 	private final FlexTable table;
-	
-	public IndicatorListWidget(EventBus eventBus, final Dispatcher dispatcher,
-			final int databaseId, final LogFrameElementDTO element) {
+
+	public IndicatorListWidget(EventBus eventBus, final Dispatcher dispatcher, final int databaseId,
+					final LogFrameElementDTO element) {
 		this.dispatcher = dispatcher;
-		this.element=element;	
-		this.databaseId=databaseId;
-		
+		this.element = element;
+		this.databaseId = databaseId;
+
 		table = new FlexTable();
 		table.setWidth("100%");
 		table.setStyleName("log-frame-indicators-table");
 		updateTable();
-		
+
 		final Label newIndicatorLink = new Label(I18N.CONSTANTS.newIndicator());
 		newIndicatorLink.addStyleName(clickAbleStyle);
 		newIndicatorLink.addClickHandler(new ClickHandler() {
@@ -63,26 +62,25 @@
 				showNewIndicatorForm();
 			}
 		});
-		
-		final Grid grid=new Grid(2, 1); 
+
+		final Grid grid = new Grid(2, 1);
 		grid.setCellSpacing(0);
- 		grid.setWidget(0, 0, table);
+		grid.setWidget(0, 0, table);
 		grid.setWidget(1, 0, newIndicatorLink);
-		
+
 		initWidget(grid);
 
-		eventBus.addListener(IndicatorEvent.CHANGED,
-				new Listener<IndicatorEvent>() {
+		eventBus.addListener(IndicatorEvent.CHANGED, new Listener<IndicatorEvent>() {
 
-					@Override
-					public void handleEvent(IndicatorEvent event) {
-						onIndicatorChangedExternally(event);
-					}
-				});
+			@Override
+			public void handleEvent(IndicatorEvent event) {
+				onIndicatorChangedExternally(event);
+			}
+		});
 
 	}
-	
-	private void showNewIndicatorForm(){
+
+	private void showNewIndicatorForm() {
 		final IndicatorDTO newIndicator = new IndicatorDTO();
 		newIndicator.setCollectIntervention(true);
 		newIndicator.setAggregation(IndicatorDTO.AGGREGATE_SUM);
@@ -98,44 +96,43 @@
 			@Override
 			public void onValidated(FormDialogTether dlg) {
 
-				dispatcher.execute(new CreateEntity(newIndicator),
-						dialog, new AsyncCallback<CreateResult>() {
+				dispatcher.execute(new CreateEntity(newIndicator), dialog, new AsyncCallback<CreateResult>() {
 
-							@Override
-							public void onFailure(Throwable caught) {
-								// handled by dialog
-							}
+					@Override
+					public void onFailure(Throwable caught) {
+						// handled by dialog
+					}
 
-							@Override
-							public void onSuccess(CreateResult result) {
-								newIndicator.setId(result.getNewId());
-								dialog.hide();
-								element.getIndicators().add(newIndicator);
-								updateTable();
-								ValueChangeEvent.fire(IndicatorListWidget.this, null);
-							}
-						});
+					@Override
+					public void onSuccess(CreateResult result) {
+						newIndicator.setId(result.getNewId());
+						dialog.hide();
+						element.getIndicators().add(newIndicator);
+						updateTable();
+						ValueChangeEvent.fire(IndicatorListWidget.this, null);
+					}
+				});
 			}
 		});
 	}
-	
-	private void updateTable(){
+
+	private void updateTable() {
 		int rowIndex = 0;
 		for (final IndicatorDTO indicator : element.getIndicators()) {
 			updateRow(rowIndex, indicator);
 			rowIndex++;
 		}
 	}
-	
-	private void updateRow(final int rowIndex,final IndicatorDTO indicator){
 
+	private void updateRow(final int rowIndex, final IndicatorDTO indicator) {
+
 		final Label label = new Label(indicator.getName());
-		
+
 		label.addClickHandler(new ClickHandler() {
 
 			@Override
 			public void onClick(ClickEvent event) {
-				onIndicatorClicked(rowIndex,indicator);
+				onIndicatorClicked(rowIndex, indicator);
 			}
 		});
 		label.addMouseOverHandler(new MouseOverHandler() {
@@ -153,36 +150,33 @@
 			}
 		});
 		table.setWidget(rowIndex, 0, label);
-		table.getFlexCellFormatter().setStyleName(rowIndex, 0,
-		"log-frame-indicators-table-cell");
-		
-		table.setHTML(rowIndex, 1, indicator.getSourceOfVerification());		
-		table.getFlexCellFormatter().setStyleName(rowIndex, 1,
-				"log-frame-indicators-table-cell");
+		table.getFlexCellFormatter().setStyleName(rowIndex, 0, "log-frame-indicators-table-cell");
+
+		table.setHTML(rowIndex, 1, indicator.getSourceOfVerification());
+		table.getFlexCellFormatter().setStyleName(rowIndex, 1, "log-frame-indicators-table-cell");
 	}
 
-	private void onIndicatorClicked(final int rowIndex,final IndicatorDTO indicator) {
+	private void onIndicatorClicked(final int rowIndex, final IndicatorDTO indicator) {
 		showDialog(indicator, new FormDialogCallback() {
 
 			@Override
 			public void onValidated(FormDialogTether dlg) {
 
-				dispatcher.execute(
-						new UpdateEntity(indicator, indicator.getProperties()), dialog,
-						new AsyncCallback<VoidResult>() {
+				dispatcher.execute(new UpdateEntity(indicator, indicator.getProperties()), dialog,
+								new AsyncCallback<VoidResult>() {
 
-							@Override
-							public void onFailure(Throwable caught) {
-								// handled by monitor
-							}
+									@Override
+									public void onFailure(Throwable caught) {
+										// handled by monitor
+									}
 
-							@Override
-							public void onSuccess(VoidResult result) {
-								dialog.hide();
-								updateRow(rowIndex, indicator);
-								ValueChangeEvent.fire(IndicatorListWidget.this,null);
-							}
-						});
+									@Override
+									public void onSuccess(VoidResult result) {
+										dialog.hide();
+										updateRow(rowIndex, indicator);
+										ValueChangeEvent.fire(IndicatorListWidget.this, null);
+									}
+								});
 			}
 		});
 	}
@@ -194,8 +188,7 @@
 		form.setGroupVisible(false);
 
 		dialog = new FormDialogImpl<IndicatorForm>(form);
-		dialog.setHeading(indicator.getName() == null ? I18N.CONSTANTS
-				.newIndicator() : indicator.getName());
+		dialog.setHeading(indicator.getName() == null ? I18N.CONSTANTS.newIndicator() : indicator.getName());
 		dialog.setWidth(form.getPreferredDialogWidth());
 		dialog.setHeight(form.getPreferredDialogHeight());
 		dialog.setScrollMode(Scroll.AUTOY);
@@ -208,15 +201,15 @@
 	 */
 	private void onIndicatorChangedExternally(IndicatorEvent event) {
 		IndicatorDTO indicator = null;
-		for(IndicatorDTO dto:element.getIndicators()){
-			if(dto.getId()==event.getEntityId())
-				indicator=dto;
-		} 
+		for (IndicatorDTO dto : element.getIndicators()) {
+			if (dto.getId() == event.getEntityId())
+				indicator = dto;
+		}
 		if (indicator != null) {
 			switch (event.getChangeType()) {
 			case DELETED:
 				element.getIndicators().remove(indicator);
- 				break;
+				break;
 			case UPDATED:
 				if (event.getChanges() != null) {
 					event.applyChanges(indicator);
@@ -228,8 +221,7 @@
 	}
 
 	@Override
-	public HandlerRegistration addValueChangeHandler(
-			ValueChangeHandler<Void> handler) {
+	public HandlerRegistration addValueChangeHandler(ValueChangeHandler<Void> handler) {
 		return addHandler(handler, ValueChangeEvent.getType());
 	}
 
Index: src/main/java/org/sigmah/client/page/project/pivot/ProjectPivotContainer.java
===================================================================
--- src/main/java/org/sigmah/client/page/project/pivot/ProjectPivotContainer.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/project/pivot/ProjectPivotContainer.java	(Arbeitskopie)
@@ -3,6 +3,7 @@
 import org.sigmah.client.EventBus;
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.event.IndicatorEvent;
 import org.sigmah.client.event.ProjectEvent;
 import org.sigmah.client.event.SiteEvent;
@@ -24,9 +25,11 @@
 import org.sigmah.shared.command.GetProject;
 import org.sigmah.shared.command.result.BatchResult;
 import org.sigmah.shared.command.result.IndicatorListResult;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.IndicatorDTO;
 import org.sigmah.shared.dto.ProjectDTO;
 import org.sigmah.shared.dto.SiteDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.report.content.EntityCategory;
 import org.sigmah.shared.report.content.MonthCategory;
 import org.sigmah.shared.report.content.PivotContent;
@@ -59,538 +62,601 @@
 
 public class ProjectPivotContainer extends ContentPanel implements ProjectSubPresenter, ActionListener {
 
-    private final EventBus eventBus;
-    private final Dispatcher dispatcher;
+	private final EventBus eventBus;
+	private final Dispatcher dispatcher;
 
-    private final IndicatorFilterCombo indicatorFilter;
-    private final SiteFilterCombo siteFilter;
-    private final DateFilterCombo dateFilter;
-    private final PivotGridPanel gridPanel;
-    private final Provider<IndicatorDialog> indicatorDialogProvider;
+	private final Authentication authentication;
 
-    private final IStateManager stateManager;
+	private final IndicatorFilterCombo indicatorFilter;
+	private final SiteFilterCombo siteFilter;
+	private final DateFilterCombo dateFilter;
+	private final PivotGridPanel gridPanel;
+	private final Provider<IndicatorDialog> indicatorDialogProvider;
 
-    private int currentDatabaseId;
-    private HistorySelector historySelector;
+	private final IStateManager stateManager;
 
-    private LayoutComposer composer;
+	private int currentDatabaseId;
+	private HistorySelector historySelector;
 
-    private ActionToolBar toolBar;
-    
-    private boolean updated;
+	private LayoutComposer composer;
 
-    /**
-     * Keeps track of the user's last choice regarding axis swapping, to be used when a new date is filtered
-     */
-    private boolean lastAxesSwapped = false;
+	private ActionToolBar toolBar;
 
-    private PivotLayout currentLayout;
-    private PivotTableElement currentPivot;
-    private CheckBox defaultViewCheckBox;
+	private boolean updated;
 
-    private Listener<BaseEvent> changeListener;
-    private EventType[] changeEventTypes = new EventType[] {
-                                                            IndicatorEvent.CHANGED,
-                                                            SiteEvent.CREATED,
-                                                            SiteEvent.UPDATED,
-                                                            ProjectEvent.CHANGED };
+	/**
+	 * Keeps track of the user's last choice regarding axis swapping, to be used
+	 * when a new date is filtered
+	 */
+	private boolean lastAxesSwapped = false;
 
-    @Inject
-    public ProjectPivotContainer(EventBus eventBus, Dispatcher dispatcher, PivotGridPanel gridPanel, Provider<IndicatorDialog> indicatorDialog, IStateManager stateManager) {
-        this.dispatcher = dispatcher;
-        this.eventBus = eventBus;
-        this.stateManager = stateManager;
-        this.gridPanel = gridPanel;
-        this.indicatorDialogProvider = indicatorDialog;
-        this.updated = false;
-        
-        ProjectPivotResources.INSTANCE.style().ensureInjected();
+	private PivotLayout currentLayout;
+	private PivotTableElement currentPivot;
+	private CheckBox defaultViewCheckBox;
 
-        setHeaderVisible(false);
-        setLayout(new FitLayout());
-        gridPanel.setHeading(I18N.CONSTANTS.indicators());
-        gridPanel.addListener(Events.HeaderClick, new Listener<PivotGridHeaderEvent>() {
+	private Listener<BaseEvent> changeListener;
+	private EventType[] changeEventTypes = new EventType[] { IndicatorEvent.CHANGED, SiteEvent.CREATED,
+					SiteEvent.UPDATED, ProjectEvent.CHANGED };
 
-            @Override
-            public void handleEvent(PivotGridHeaderEvent be) {
-                onHeaderClicked(be);
-            }
-        });
-        gridPanel.addListener(Events.AfterEdit, new Listener<PivotGridCellEvent>() {
+	@Inject
+	public ProjectPivotContainer(EventBus eventBus, Dispatcher dispatcher, PivotGridPanel gridPanel,
+					Provider<IndicatorDialog> indicatorDialog, IStateManager stateManager, Authentication authentication) {
+		this.dispatcher = dispatcher;
+		this.eventBus = eventBus;
+		this.stateManager = stateManager;
+		this.gridPanel = gridPanel;
+		this.indicatorDialogProvider = indicatorDialog;
+		this.updated = false;
+		this.authentication = authentication;
 
-            @Override
-            public void handleEvent(PivotGridCellEvent event) {
-                onCellEdited(event);
-            }
-        });
-        gridPanel.getStore().addListener(Events.Update, new Listener<StoreEvent<PivotGridPanel.PivotTableRow>>() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR)
+						&& !ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_INDICATOR))
+			gridPanel.setHEADER_DECORATORWithOutEdit();
 
-            @Override
-            public void handleEvent(StoreEvent<PivotTableRow> be) {
-                toolBar.setDirty(true);
-            }
-        });
-        add(gridPanel);
+		ProjectPivotResources.INSTANCE.style().ensureInjected();
 
-        indicatorFilter = new IndicatorFilterCombo(dispatcher);
-        indicatorFilter.addListener(Events.Select, new Listener<FieldEvent>() {
+		setHeaderVisible(false);
+		setLayout(new FitLayout());
+		gridPanel.setHeading(I18N.CONSTANTS.indicators());
 
-            @Override
-            public void handleEvent(FieldEvent event) {
-                onIndicatorSelected();
-            }
-        });
-        siteFilter = new SiteFilterCombo(dispatcher);
-        siteFilter.addListener(Events.Select, new Listener<FieldEvent>() {
+		gridPanel.addListener(Events.HeaderClick, new Listener<PivotGridHeaderEvent>() {
 
-            @Override
-            public void handleEvent(FieldEvent be) {
-                onSiteSelected();
-            }
-        });
+			@Override
+			public void handleEvent(PivotGridHeaderEvent be) {
+				onHeaderClicked(be);
+			}
+		});
 
-        dateFilter = new DateFilterCombo();
-        dateFilter.addListener(Events.Select, new Listener<BaseEvent>() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_INDICATOR)) {
+			gridPanel.addListener(Events.AfterEdit, new Listener<PivotGridCellEvent>() {
 
-            @Override
-            public void handleEvent(BaseEvent be) {
-                onDateSelected();
-            }
-        });
+				@Override
+				public void handleEvent(PivotGridCellEvent event) {
+					onCellEdited(event);
+				}
+			});
+		}
 
-        historySelector = new HistorySelector();
-        historySelector.addValueChangeHandler(new ValueChangeHandler<Integer>() {
+		gridPanel.getStore().addListener(Events.Update, new Listener<StoreEvent<PivotGridPanel.PivotTableRow>>() {
 
-            @Override
-            public void onValueChange(ValueChangeEvent<Integer> event) {
-                historyValueChange(historySelector.getLayouts().get(event.getValue()));
-            }
-        });
+			@Override
+			public void handleEvent(StoreEvent<PivotTableRow> be) {
+				toolBar.setDirty(true);
+			}
+		});
 
-        defaultViewCheckBox = new CheckBox();
-        defaultViewCheckBox.addListener(Events.OnClick, new Listener<FieldEvent>() {
+		add(gridPanel);
 
-            @Override
-            public void handleEvent(FieldEvent event) {
-                onDefaultCheck(event);
-            }
+		indicatorFilter = new IndicatorFilterCombo(dispatcher);
+		indicatorFilter.addListener(Events.Select, new Listener<FieldEvent>() {
 
-        });
+			@Override
+			public void handleEvent(FieldEvent event) {
+				onIndicatorSelected();
+			}
+		});
+		siteFilter = new SiteFilterCombo(dispatcher);
+		siteFilter.addListener(Events.Select, new Listener<FieldEvent>() {
 
-        Label defaultViewLabel = new Label(I18N.CONSTANTS.defaultView());
-        defaultViewLabel.setLabelFor(defaultViewCheckBox.getId());
+			@Override
+			public void handleEvent(FieldEvent be) {
+				onSiteSelected();
+			}
+		});
 
-        toolBar = new ActionToolBar();
-        toolBar.addStyleName(ProjectPivotResources.INSTANCE.style().toolbar());
-        toolBar.addSaveSplitButton();
-        toolBar.setDirty(false);
+		dateFilter = new DateFilterCombo();
+		dateFilter.addListener(Events.Select, new Listener<BaseEvent>() {
 
-        toolBar.add(new SeparatorToolItem());
-        toolBar.add(new Label(I18N.CONSTANTS.site()));
-        toolBar.add(siteFilter);
-        toolBar.add(new Label(I18N.CONSTANTS.indicator()));
-        toolBar.add(indicatorFilter);
-        toolBar.add(new Label(I18N.CONSTANTS.indicatorFilterToolBarLabel()));
-        toolBar.add(dateFilter);
+			@Override
+			public void handleEvent(BaseEvent be) {
+				onDateSelected();
+			}
+		});
 
-        toolBar.add(new FillToolItem());
-        toolBar.add(historySelector.getPrevButton());
-        toolBar.add(historySelector.getNextButton());
-        toolBar.add(defaultViewLabel);
-        toolBar.add(defaultViewCheckBox);
-        toolBar.setListener(this);
-        toolBar.setDirty(false);
-        setTopComponent(toolBar);
+		historySelector = new HistorySelector();
+		historySelector.addValueChangeHandler(new ValueChangeHandler<Integer>() {
 
-        registerChangeListeners();
-    }
+			@Override
+			public void onValueChange(ValueChangeEvent<Integer> event) {
+				historyValueChange(historySelector.getLayouts().get(event.getValue()));
+			}
+		});
 
-    private void registerChangeListeners() {
-        changeListener = new Listener<BaseEvent>() {
+		defaultViewCheckBox = new CheckBox();
+		defaultViewCheckBox.addListener(Events.OnClick, new Listener<FieldEvent>() {
 
-            @Override
-            public void handleEvent(BaseEvent be) {
-                if (be.getSource() != ProjectPivotContainer.this) {
-                    refresh();
-                }
-            }
-        };
-        for (EventType eventType : changeEventTypes) {
-            eventBus.addListener(eventType, changeListener);
-        }
-    }
+			@Override
+			public void handleEvent(FieldEvent event) {
+				onDefaultCheck(event);
+			}
 
-    private void unregisterChangeListeners() {
-        for (EventType eventType : changeEventTypes) {
-            eventBus.removeListener(eventType, changeListener);
-        }
-    }
+		});
 
-    @Override
-    public void loadProject(ProjectDTO project) {
-        this.currentDatabaseId = project.getId();
-        indicatorFilter.setDatabaseId(currentDatabaseId);
-        siteFilter.setDatabaseId(currentDatabaseId);
-        dateFilter.fillMonths(project.getStartDate());
-        composer = new LayoutComposer(new DateUtilGWTImpl(), project);
+		Label defaultViewLabel = new Label(I18N.CONSTANTS.defaultView());
+		defaultViewLabel.setLabelFor(defaultViewCheckBox.getId());
 
-        pivotToDefault();
-    }
+		toolBar = new ActionToolBar();
+		toolBar.addStyleName(ProjectPivotResources.INSTANCE.style().toolbar());
+		toolBar.addSaveSplitButton();
+		toolBar.setDirty(false);
 
-    private void pivotToDefault() {
-        String defaultLayoutId = (String) stateManager.get(defaultPivotStateKey());
-        if (defaultLayoutId == null) {
-            pivotToImplictDefault();
-        } else {
-            PivotLayout.deserialize(dispatcher, currentDatabaseId, defaultLayoutId, new AsyncCallback<PivotLayout>() {
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_INDICATOR))
+			toolBar.add(new SeparatorToolItem());
+		toolBar.add(new Label(I18N.CONSTANTS.site()));
+		toolBar.add(siteFilter);
+		toolBar.add(new Label(I18N.CONSTANTS.indicator()));
+		toolBar.add(indicatorFilter);
+		toolBar.add(new Label(I18N.CONSTANTS.indicatorFilterToolBarLabel()));
+		toolBar.add(dateFilter);
 
-                @Override
-                public void onSuccess(PivotLayout result) {
-                    historySelector.onNewLayout(result);
-                    pivotTo(result);
-                }
+		toolBar.add(new FillToolItem());
+		toolBar.add(historySelector.getPrevButton());
+		toolBar.add(historySelector.getNextButton());
+		toolBar.add(defaultViewLabel);
+		toolBar.add(defaultViewCheckBox);
+		toolBar.setListener(this);
+		toolBar.setDirty(false);
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_INDICATOR)) {
+			toolBar.getSaveButton().hide();
 
-                @Override
-                public void onFailure(Throwable caught) {
-                    pivotToImplictDefault();
-                }
-            });
-        }
-    }
+			// gridPanel.addListener(Events.CellClick, new
+			// Listener<GridEvent<PivotTableRow>>() {
+			//
+			// @Override
+			// public void handleEvent(GridEvent<PivotTableRow> event) {
+			// event.cancelBubble();
+			// }
+			// });
 
-    private void pivotToImplictDefault() {
-        dateFilter.setValue(dateFilter.getStore().getAt(0));
-        onDateSelected();
-    }
+			gridPanel.addListener(Events.CellClick, new Listener<PivotGridCellEvent>() {
 
-    private void onProjectChanged() {
-        dispatcher.execute(new GetProject(currentDatabaseId), new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading()),
-            new AsyncCallback<ProjectDTO>() {
+				@Override
+				public void handleEvent(PivotGridCellEvent event) {
+					// MessageBox.alert("event",
+					// event.getGrid().getClass().toString(), null);
+					event.stopEvent();
 
-                @Override
-                public void onFailure(Throwable caught) {
-                }
+					event.getGrid().addListener(Events.BeforeEdit, new Listener<BaseEvent>() {
 
-                @Override
-                public void onSuccess(ProjectDTO project) {
-                    dateFilter.fillMonths(project.getStartDate());
-                }
-            });
-    }
+						@Override
+						public void handleEvent(BaseEvent be) {
+							be.setCancelled(true);
 
-    /**
-     * Handle when the user selects an indicator from the filter
-     */
-    private void onIndicatorSelected() {
+						}
+					});
 
-        final IndicatorDTO indicator = indicatorFilter.getValue();
-        IndicatorLayout layout = new IndicatorLayout(indicator);
-        historySelector.onNewLayout(layout);
-        pivotTo(layout);
-    }
+				}
+			});
 
-    /**
-     * Handle user selection of the site filter combo
-     */
-    private void onSiteSelected() {
+		}
+		setTopComponent(toolBar);
 
-        final SiteDTO site = (SiteDTO) siteFilter.getValue();
-        SiteLayout layout = new SiteLayout(site);
-        historySelector.onNewLayout(layout);
-        pivotTo(layout);
-    }
+		registerChangeListeners();
 
-    /**
-     * Handle user selection of the date combo
-     */
-    private void onDateSelected() {
+	}
 
-        final DateRangeModel dateRangeModel = dateFilter.getValue();
-        DateLayout dateLayout = new DateLayout(dateRangeModel, lastAxesSwapped);
-        historySelector.onNewLayout(dateLayout);
+	private void registerChangeListeners() {
+		changeListener = new Listener<BaseEvent>() {
 
-        pivotTo(dateLayout);
+			@Override
+			public void handleEvent(BaseEvent be) {
+				if (be.getSource() != ProjectPivotContainer.this) {
+					refresh();
+				}
+			}
+		};
+		for (EventType eventType : changeEventTypes) {
+			eventBus.addListener(eventType, changeListener);
+		}
+	}
 
-    }
+	private void unregisterChangeListeners() {
+		for (EventType eventType : changeEventTypes) {
+			eventBus.removeListener(eventType, changeListener);
+		}
+	}
 
-    private void pivotTo(IndicatorLayout layout) {
-        siteFilter.clear();
-        dateFilter.clear();
+	@Override
+	public void loadProject(ProjectDTO project) {
+		this.currentDatabaseId = project.getId();
+		indicatorFilter.setDatabaseId(currentDatabaseId);
+		siteFilter.setDatabaseId(currentDatabaseId);
+		dateFilter.fillMonths(project.getStartDate());
+		composer = new LayoutComposer(new DateUtilGWTImpl(), project);
 
-        gridPanel.setHeading(I18N.MESSAGES.projectPivotByIndicator(layout.getIndicator().getName()));
-        gridPanel.setShowSwapIcon(false);
+		pivotToDefault();
+	}
 
-        PivotTableElement pivot = composer.fixIndicator(layout.getIndicator().getId());
-        loadPivot(pivot);
+	private void pivotToDefault() {
+		String defaultLayoutId = (String) stateManager.get(defaultPivotStateKey());
+		if (defaultLayoutId == null) {
+			pivotToImplictDefault();
+		} else {
+			PivotLayout.deserialize(dispatcher, currentDatabaseId, defaultLayoutId, new AsyncCallback<PivotLayout>() {
 
-        onLayoutChanged(layout);
-    }
+				@Override
+				public void onSuccess(PivotLayout result) {
+					historySelector.onNewLayout(result);
+					pivotTo(result);
+				}
 
-    private void pivotTo(SiteLayout layout) {
-        indicatorFilter.clear();
-        dateFilter.clear();
+				@Override
+				public void onFailure(Throwable caught) {
+					pivotToImplictDefault();
+				}
+			});
+		}
+	}
 
-        PivotTableElement pivot = composer.fixSite(layout.getSite().getId());
-        gridPanel.setHeading(I18N.MESSAGES.projectPivotBySite(layout.getSite().getLocationName()));
-        gridPanel.setShowSwapIcon(false);
+	private void pivotToImplictDefault() {
+		dateFilter.setValue(dateFilter.getStore().getAt(0));
+		onDateSelected();
+	}
 
-        loadPivot(pivot);
+	private void onProjectChanged() {
+		dispatcher.execute(new GetProject(currentDatabaseId), new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading()),
+						new AsyncCallback<ProjectDTO>() {
 
-        onLayoutChanged(layout);
-    }
+							@Override
+							public void onFailure(Throwable caught) {
+							}
 
-    private void pivotTo(DateLayout layout) {
-        indicatorFilter.clear();
-        siteFilter.clear();
-        gridPanel.setHeading(I18N.MESSAGES.projectPivotByMonth(layout.getModel().getLabel()));
-        gridPanel.setShowSwapIcon(true);
+							@Override
+							public void onSuccess(ProjectDTO project) {
+								dateFilter.fillMonths(project.getStartDate());
+							}
+						});
+	}
 
-        PivotTableElement pivot = composer.fixDateRange(layout.getDateRange(), layout.getAxesSwapped());
+	/**
+	 * Handle when the user selects an indicator from the filter
+	 */
+	private void onIndicatorSelected() {
 
-        loadPivot(pivot);
+		final IndicatorDTO indicator = indicatorFilter.getValue();
+		IndicatorLayout layout = new IndicatorLayout(indicator);
+		historySelector.onNewLayout(layout);
+		pivotTo(layout);
+	}
 
-        lastAxesSwapped = layout.getAxesSwapped();
+	/**
+	 * Handle user selection of the site filter combo
+	 */
+	private void onSiteSelected() {
 
-        onLayoutChanged(layout);
-    }
+		final SiteDTO site = (SiteDTO) siteFilter.getValue();
+		SiteLayout layout = new SiteLayout(site);
+		historySelector.onNewLayout(layout);
+		pivotTo(layout);
+	}
 
-    private void onLayoutChanged(PivotLayout layout) {
-        currentLayout = layout;
-        if (layout.serialize().equals(stateManager.get(defaultPivotStateKey()))) {
-            defaultViewCheckBox.setValue(true);
-        } else {
-            defaultViewCheckBox.setValue(false);
-        }
-    }
+	/**
+	 * Handle user selection of the date combo
+	 */
+	private void onDateSelected() {
 
-    private void onHeaderClicked(PivotGridHeaderEvent event) {
-        Log.debug("Header clicked : " + event.getAxis());
+		final DateRangeModel dateRangeModel = dateFilter.getValue();
+		DateLayout dateLayout = new DateLayout(dateRangeModel, lastAxesSwapped);
+		historySelector.onNewLayout(dateLayout);
 
-        if (event.getIconTarget() == IconTarget.ZOOM) {
-            onZoom(event);
-        } else if (event.getIconTarget() == IconTarget.EDIT) {
-            Axis axis = event.getAxis();
-            if (axis.getDimension().getType() == DimensionType.Indicator) {
-                editIndicator(((EntityCategory) axis.getCategory()).getId());
-            }
-        } else if (event.getIconTarget() == IconTarget.SWAP) {
-            swapAxes();
-        }
-    }
+		pivotTo(dateLayout);
 
-    private void swapAxes() {
-        if (currentLayout instanceof DateLayout) {
-            DateLayout newLayout = ((DateLayout) currentLayout).swapAxes();
-            historySelector.onNewLayout(newLayout);
-            pivotTo(newLayout);
-        }
-    }
+	}
 
-    private void onZoom(PivotGridHeaderEvent event) {
-        Axis axis = event.getAxis();
-        if (axis.getDimension().getType() == DimensionType.Site) {
-            SiteDTO site = new SiteDTO();
-            site.setId(((EntityCategory) axis.getCategory()).getId());
-            site.setLocationName(axis.getLabel());
+	private void pivotTo(IndicatorLayout layout) {
+		siteFilter.clear();
+		dateFilter.clear();
 
-            siteFilter.setValue(site);
-            onSiteSelected();
+		gridPanel.setHeading(I18N.MESSAGES.projectPivotByIndicator(layout.getIndicator().getName()));
+		gridPanel.setShowSwapIcon(false);
 
-        } else if (axis.getDimension().getType() == DimensionType.Indicator) {
-            IndicatorDTO indicator = new IndicatorDTO();
-            indicator.setId(((EntityCategory) axis.getCategory()).getId());
-            indicator.setName(axis.getLabel());
+		PivotTableElement pivot = composer.fixIndicator(layout.getIndicator().getId());
+		loadPivot(pivot);
 
-            indicatorFilter.setValue(indicator);
-            onIndicatorSelected();
-        } else if (axis.getDimension().getType() == DimensionType.Date) {
-            if (axis.getCategory() instanceof MonthCategory) {
-                DateRangeModel model = DateFilterCombo.monthModel((MonthCategory) axis.getCategory());
-                dateFilter.setValue(model);
-                onDateSelected();
-            }
-        }
+		onLayoutChanged(layout);
+	}
 
-    }
+	private void pivotTo(SiteLayout layout) {
+		indicatorFilter.clear();
+		dateFilter.clear();
 
-    private void editIndicator(final int id) {
-        dispatcher.execute(GetIndicators.forDatabase(this.currentDatabaseId), new MaskingAsyncMonitor(this,
-            I18N.CONSTANTS.loading()), new AsyncCallback<IndicatorListResult>() {
+		PivotTableElement pivot = composer.fixSite(layout.getSite().getId());
+		gridPanel.setHeading(I18N.MESSAGES.projectPivotBySite(layout.getSite().getLocationName()));
+		gridPanel.setShowSwapIcon(false);
 
-            @Override
-            public void onFailure(Throwable caught) {
-                // monitor
-            }
+		loadPivot(pivot);
 
-            @Override
-            public void onSuccess(IndicatorListResult result) {
-                for (IndicatorDTO indicator : result.getData()) {
-                    if (indicator.getId() == id) {
-                        editIndicator(indicator);
-                    }
-                }
-            }
+		onLayoutChanged(layout);
+	}
 
-        });
-    }
+	private void pivotTo(DateLayout layout) {
+		indicatorFilter.clear();
+		siteFilter.clear();
+		gridPanel.setHeading(I18N.MESSAGES.projectPivotByMonth(layout.getModel().getLabel()));
+		gridPanel.setShowSwapIcon(true);
 
-    protected void editIndicator(IndicatorDTO indicator) {
-        IndicatorDialog dialog = indicatorDialogProvider.get();
-        dialog.show(currentDatabaseId, indicator);
-    }
+		PivotTableElement pivot = composer.fixDateRange(layout.getDateRange(), layout.getAxesSwapped());
 
-    private void onCellEdited(final PivotGridCellEvent event) {
-        this.updated = true;
-        toolBar.setDirty(true);
-        if (event.getCell() != null) {
-            if (event.getCell().getCount() > 1) {
-                MessageBox.confirm(I18N.CONSTANTS.confirmUpdate(), I18N.CONSTANTS.confirmUpdateOfAggregatedCell(),
-                    new Listener<MessageBoxEvent>() {
+		loadPivot(pivot);
 
-                        @Override
-                        public void handleEvent(MessageBoxEvent mbEvent) {
-                            if (!mbEvent.getButtonClicked().getItemId().equals(MessageBox.OK)) {
-                                event.getRecord().set(event.getProperty(), event.getCell().getValue());
-                            }
-                        }
-                    });
-            }
-        }
-    }
+		lastAxesSwapped = layout.getAxesSwapped();
 
-    private void historyValueChange(PivotLayout layout) {
-        pivotTo(layout);
-    }
+		onLayoutChanged(layout);
+	}
 
-    private void pivotTo(PivotLayout layout) {
-        if (layout instanceof SiteLayout) {
-            siteFilter.setValue(((SiteLayout) layout).getSite());
-            pivotTo((SiteLayout) layout);
+	private void onLayoutChanged(PivotLayout layout) {
+		currentLayout = layout;
+		if (layout.serialize().equals(stateManager.get(defaultPivotStateKey()))) {
+			defaultViewCheckBox.setValue(true);
+		} else {
+			defaultViewCheckBox.setValue(false);
+		}
+	}
 
-        } else if (layout instanceof IndicatorLayout) {
-            indicatorFilter.setValue(((IndicatorLayout) layout).getIndicator());
-            pivotTo((IndicatorLayout) layout);
+	private void onHeaderClicked(PivotGridHeaderEvent event) {
+		Log.debug("Header clicked : " + event.getAxis());
 
-        } else if (layout instanceof DateLayout) {
-            dateFilter.setValue(((DateLayout) layout).getModel());
-            pivotTo((DateLayout) layout);
-        }
-    }
+		if (event.getIconTarget() == IconTarget.ZOOM) {
+			onZoom(event);
+		} else if (event.getIconTarget() == IconTarget.EDIT) {
+			Axis axis = event.getAxis();
+			if (axis.getDimension().getType() == DimensionType.Indicator) {
+				editIndicator(((EntityCategory) axis.getCategory()).getId());
+			}
+		} else if (event.getIconTarget() == IconTarget.SWAP) {
+			swapAxes();
+		}
+	}
 
-    private void refresh() {
-        loadPivot(currentPivot);
-    }
+	private void swapAxes() {
+		if (currentLayout instanceof DateLayout) {
+			DateLayout newLayout = ((DateLayout) currentLayout).swapAxes();
+			historySelector.onNewLayout(newLayout);
+			pivotTo(newLayout);
+		}
+	}
 
-    private void onDefaultCheck(FieldEvent event) {
+	private void onZoom(PivotGridHeaderEvent event) {
+		Axis axis = event.getAxis();
+		if (axis.getDimension().getType() == DimensionType.Site) {
+			SiteDTO site = new SiteDTO();
+			site.setId(((EntityCategory) axis.getCategory()).getId());
+			site.setLocationName(axis.getLabel());
 
-        final boolean newValue = defaultViewCheckBox.getValue();
+			siteFilter.setValue(site);
+			onSiteSelected();
 
-        MessageBox.confirm(I18N.CONSTANTS.defaultView(), I18N.CONSTANTS.confirmDefaultViewChange(),
-            new Listener<MessageBoxEvent>() {
+		} else if (axis.getDimension().getType() == DimensionType.Indicator) {
+			IndicatorDTO indicator = new IndicatorDTO();
+			indicator.setId(((EntityCategory) axis.getCategory()).getId());
+			indicator.setName(axis.getLabel());
 
-                @Override
-                public void handleEvent(MessageBoxEvent be) {
-                    if (be.getButtonClicked().getItemId().equals("yes")) {
-                        persistDefaultView(newValue);
-                    } else {
-                        defaultViewCheckBox.setValue(!newValue);
-                    }
-                }
-            });
-    }
+			indicatorFilter.setValue(indicator);
+			onIndicatorSelected();
+		} else if (axis.getDimension().getType() == DimensionType.Date) {
+			if (axis.getCategory() instanceof MonthCategory) {
+				DateRangeModel model = DateFilterCombo.monthModel((MonthCategory) axis.getCategory());
+				dateFilter.setValue(model);
+				onDateSelected();
+			}
+		}
 
-    private void persistDefaultView(boolean newValue) {
-        if (newValue) {
-            stateManager.set(defaultPivotStateKey(), currentLayout.serialize());
-            Info.display(I18N.CONSTANTS.saved(), I18N.CONSTANTS.defaultViewChanged());
-        } else {
-            // don't allow unchecking: there is not really a logical action to take because
-            // there always needs to be a default view
-            defaultViewCheckBox.setValue(true);
-        }
-    }
+	}
 
-    private String defaultPivotStateKey() {
-        return "ProjectPivotDefault" + currentDatabaseId;
-    }
+	private void editIndicator(final int id) {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR)
+						&& !ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_INDICATOR))
+			return;
+		dispatcher.execute(GetIndicators.forDatabase(this.currentDatabaseId), new MaskingAsyncMonitor(this,
+						I18N.CONSTANTS.loading()), new AsyncCallback<IndicatorListResult>() {
 
-    private void loadPivot(final PivotTableElement pivot) {
-        currentPivot = pivot;
-        dispatcher.execute(new GenerateElement<PivotContent>(pivot),
-            new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading()), new AsyncCallback<PivotContent>() {
+			@Override
+			public void onFailure(Throwable caught) {
+				// monitor
+			}
 
-                @Override
-                public void onFailure(Throwable caught) {
-                    gridPanel.clear();
-                    Log.debug("Pivot failed", caught);
-                }
+			@Override
+			public void onSuccess(IndicatorListResult result) {
+				for (IndicatorDTO indicator : result.getData()) {
+					if (indicator.getId() == id) {
+						editIndicator(indicator);
+					}
+				}
+			}
 
-                @Override
-                public void onSuccess(PivotContent content) {
-                    pivot.setContent(content);
-                    gridPanel.setValue(pivot);
-                }
-            });
-    }
+		});
+	}
 
-    @Override
-    public void onUIAction(String actionId) {
-        if (UIActions.save.equals(actionId)) {
-            save();
-            this.updated = false; 
-        } else if (UIActions.discardChanges.equals(actionId)) {
-            discard();
-            this.updated = false; 
-        }
-    }
+	protected void editIndicator(IndicatorDTO indicator) {
+		IndicatorDialog dialog = indicatorDialogProvider.get();
+		boolean getForm = true;
+		boolean getPivot = true;
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.MANAGE_INDICATOR)) {
+			dialog.removeDef();
+			getForm = false;
+		}
 
-    private void save() {
+		if (!ProfileUtils.isGranted(authentication, GlobalPermissionEnum.EDIT_INDICATOR)) {
+			dialog.removeVal();
+			getPivot = false;
+		}
+		dialog.show(currentDatabaseId, indicator, getForm, getPivot);
+	}
 
-        dispatcher.execute(gridPanel.composeSaveCommand(), new MaskingAsyncMonitor(this, I18N.CONSTANTS.saving()),
-            new AsyncCallback<BatchResult>() {
+	private void onCellEdited(final PivotGridCellEvent event) {
+		this.updated = true;
+		toolBar.setDirty(true);
+		if (event.getCell() != null) {
+			if (event.getCell().getCount() > 1) {
+				MessageBox.confirm(I18N.CONSTANTS.confirmUpdate(), I18N.CONSTANTS.confirmUpdateOfAggregatedCell(),
+								new Listener<MessageBoxEvent>() {
 
-                @Override
-                public void onFailure(Throwable caught) {
-                    // handled by monitor
-                }
+									@Override
+									public void handleEvent(MessageBoxEvent mbEvent) {
+										if (!mbEvent.getButtonClicked().getItemId().equals(MessageBox.OK)) {
+											event.getRecord().set(event.getProperty(), event.getCell().getValue());
+										}
+									}
+								});
+			}
+		}
+	}
 
-                @Override
-                public void onSuccess(BatchResult result) {
-                    gridPanel.getStore().commitChanges();
-                    toolBar.setDirty(false);
-                    eventBus.fireEvent(new IndicatorEvent(IndicatorEvent.CHANGED, ProjectPivotContainer.this));
-                }
-            });
-    }
+	private void historyValueChange(PivotLayout layout) {
+		pivotTo(layout);
+	}
 
-    private void discard() {
-        gridPanel.getStore().rejectChanges();
-        toolBar.setDirty(false);
-    }
+	private void pivotTo(PivotLayout layout) {
+		if (layout instanceof SiteLayout) {
+			siteFilter.setValue(((SiteLayout) layout).getSite());
+			pivotTo((SiteLayout) layout);
 
-    @Override
-    public Component getView() {
-        return this;
-    }
+		} else if (layout instanceof IndicatorLayout) {
+			indicatorFilter.setValue(((IndicatorLayout) layout).getIndicator());
+			pivotTo((IndicatorLayout) layout);
 
-    @Override
-    public void discardView() {
-        unregisterChangeListeners();
-    }
+		} else if (layout instanceof DateLayout) {
+			dateFilter.setValue(((DateLayout) layout).getModel());
+			pivotTo((DateLayout) layout);
+		}
+	}
 
-    @Override
-    public void viewDidAppear() {
+	private void refresh() {
+		loadPivot(currentPivot);
+	}
 
-    }
+	private void onDefaultCheck(FieldEvent event) {
 
-    @Override
-    public boolean hasValueChanged() {
-        return updated;
-    }
+		final boolean newValue = defaultViewCheckBox.getValue();
 
-    @Override
-    public void forgetAllChangedValues() {
-        updated = false;
-        discard();
-    }
+		MessageBox.confirm(I18N.CONSTANTS.defaultView(), I18N.CONSTANTS.confirmDefaultViewChange(),
+						new Listener<MessageBoxEvent>() {
+
+							@Override
+							public void handleEvent(MessageBoxEvent be) {
+								if (be.getButtonClicked().getItemId().equals("yes")) {
+									persistDefaultView(newValue);
+								} else {
+									defaultViewCheckBox.setValue(!newValue);
+								}
+							}
+						});
+	}
+
+	private void persistDefaultView(boolean newValue) {
+		if (newValue) {
+			stateManager.set(defaultPivotStateKey(), currentLayout.serialize());
+			Info.display(I18N.CONSTANTS.saved(), I18N.CONSTANTS.defaultViewChanged());
+		} else {
+			// don't allow unchecking: there is not really a logical action to
+			// take because
+			// there always needs to be a default view
+			defaultViewCheckBox.setValue(true);
+		}
+	}
+
+	private String defaultPivotStateKey() {
+		return "ProjectPivotDefault" + currentDatabaseId;
+	}
+
+	private void loadPivot(final PivotTableElement pivot) {
+		currentPivot = pivot;
+		dispatcher.execute(new GenerateElement<PivotContent>(pivot),
+						new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading()), new AsyncCallback<PivotContent>() {
+
+							@Override
+							public void onFailure(Throwable caught) {
+								gridPanel.clear();
+								Log.debug("Pivot failed", caught);
+							}
+
+							@Override
+							public void onSuccess(PivotContent content) {
+								pivot.setContent(content);
+								gridPanel.setValue(pivot);
+							}
+						});
+	}
+
+	@Override
+	public void onUIAction(String actionId) {
+		if (UIActions.save.equals(actionId)) {
+			save();
+			this.updated = false;
+		} else if (UIActions.discardChanges.equals(actionId)) {
+			discard();
+			this.updated = false;
+		}
+	}
+
+	private void save() {
+
+		dispatcher.execute(gridPanel.composeSaveCommand(), new MaskingAsyncMonitor(this, I18N.CONSTANTS.saving()),
+						new AsyncCallback<BatchResult>() {
+
+							@Override
+							public void onFailure(Throwable caught) {
+								// handled by monitor
+							}
+
+							@Override
+							public void onSuccess(BatchResult result) {
+								gridPanel.getStore().commitChanges();
+								toolBar.setDirty(false);
+								eventBus.fireEvent(new IndicatorEvent(IndicatorEvent.CHANGED,
+												ProjectPivotContainer.this));
+							}
+						});
+	}
+
+	private void discard() {
+		gridPanel.getStore().rejectChanges();
+		toolBar.setDirty(false);
+	}
+
+	@Override
+	public Component getView() {
+		return this;
+	}
+
+	@Override
+	public void discardView() {
+		unregisterChangeListeners();
+	}
+
+	@Override
+	public void viewDidAppear() {
+
+	}
+
+	@Override
+	public boolean hasValueChanged() {
+		return updated;
+	}
+
+	@Override
+	public void forgetAllChangedValues() {
+		updated = false;
+		discard();
+	}
 }
Index: src/main/java/org/sigmah/client/page/table/PivotGridPanel.java
===================================================================
--- src/main/java/org/sigmah/client/page/table/PivotGridPanel.java	(Revision 1501)
+++ src/main/java/org/sigmah/client/page/table/PivotGridPanel.java	(Arbeitskopie)
@@ -65,35 +65,34 @@
  */
 public class PivotGridPanel extends ContentPanel implements HasValue<PivotElement> {
 
-    private EventBus eventBus;
-    private final Dispatcher dispatcher;
-    
-    private PivotElement element;
-    private EditorTreeGrid<PivotTableRow> grid;
-    private TreeStore<PivotTableRow> store;
-    private ColumnMapping columnMapping;
-    
-    private Map<Integer, IndicatorDTO> indicators;
-    
-    private DateUtil dateUtil = new DateUtilGWTImpl();
-    
-    
-    private boolean showAxisIcons = true;
-    private boolean showSwapIcon = false;
+	private EventBus eventBus;
+	private final Dispatcher dispatcher;
 
-    @Inject
-    public PivotGridPanel(EventBus eventBus, Dispatcher dispatcher) {
-        this.eventBus = eventBus;
-        this.dispatcher = dispatcher;
-        setLayout(new FitLayout());
-        
-        store = new TreeStore<PivotTableRow>();
+	private PivotElement element;
+	private EditorTreeGrid<PivotTableRow> grid;
+	private TreeStore<PivotTableRow> store;
+	private ColumnMapping columnMapping;
 
-        PivotResources.INSTANCE.css().ensureInjected();
-    }
+	private Map<Integer, IndicatorDTO> indicators;
 
-    
-    public boolean isShowAxisIcons() {
+	private DateUtil dateUtil = new DateUtilGWTImpl();
+
+	private boolean showAxisIcons = true;
+	private boolean showSwapIcon = false;
+
+	@Inject
+	public PivotGridPanel(EventBus eventBus, Dispatcher dispatcher) {
+		this.eventBus = eventBus;
+		this.dispatcher = dispatcher;
+
+		setLayout(new FitLayout());
+
+		store = new TreeStore<PivotTableRow>();
+
+		PivotResources.INSTANCE.css().ensureInjected();
+	}
+
+	public boolean isShowAxisIcons() {
 		return showAxisIcons;
 	}
 
@@ -111,241 +110,242 @@
 
 	public class PivotTableRow extends BaseTreeModel {
 
-        private PivotTableData.Axis rowAxis;
+		private PivotTableData.Axis rowAxis;
 
-        public PivotTableRow(PivotTableData.Axis axis) {
-            this.rowAxis = axis;
-            set("header", HEADER_DECORATOR.decorateHeader(axis));
+		public PivotTableRow(PivotTableData.Axis axis) {
+			this.rowAxis = axis;
+			set("header", HEADER_DECORATOR.decorateHeader(axis));
 
-            updateFromTree();
-            
-            for(PivotTableData.Axis child : rowAxis.getChildren()) {
-                add(new PivotTableRow(child));
-            }
-        }
+			updateFromTree();
 
-        /**
-         * Updates this model from the Cell values in the PivotTableData tree. 
-         */
+			for (PivotTableData.Axis child : rowAxis.getChildren()) {
+				add(new PivotTableRow(child));
+			}
+		}
+
+		/**
+		 * Updates this model from the Cell values in the PivotTableData tree.
+		 */
 		private void updateFromTree() {
 			this.setProperties(Collections.EMPTY_MAP);
-			for(Map.Entry<PivotTableData.Axis, PivotTableData.Cell> entry : rowAxis.getCells().entrySet()) {
-                String property = columnMapping.propertyNameForAxis(entry.getKey());
+			for (Map.Entry<PivotTableData.Axis, PivotTableData.Cell> entry : rowAxis.getCells().entrySet()) {
+				String property = columnMapping.propertyNameForAxis(entry.getKey());
 				set(property, entry.getValue().getValue());
-            }
+			}
 		}
 
-        public PivotTableData.Axis getRowAxis() {
-            return rowAxis;
-        }
-        
-        public PivotTableData.Axis getColAxis(String property) {
-        	return columnMapping.columnAxisForProperty(property);
-        }
-        
-        public DimensionCategory getCategory(String property, Dimension dimension) {
-        	DimensionCategory category = findCategory(rowAxis, dimension);
-        	if(category == null) {
-        		return findCategory(getColAxis(property), dimension);
-        	}
-        	return category;
-        }
-        
-        private DimensionCategory findCategory(PivotTableData.Axis leaf, Dimension dim) {
-        	while(leaf != null) {
-        		if(leaf.getDimension() != null && leaf.getDimension().equals(dim)) {
-        			return leaf.getCategory();
-        		}
-        		leaf = leaf.getParent();
-        	}
-        	return null;
-        }
-        
-        public int getIndicatorId(String property) {
-        	Set<Integer> indicatorRestrictions = element.getFilter().getRestrictions(DimensionType.Indicator);
-			if(indicatorRestrictions.size() == 1) {
-        		return indicatorRestrictions.iterator().next();
-        	}
-        	EntityCategory cat = (EntityCategory) getCategory(property, new Dimension(DimensionType.Indicator));
-        	if(cat != null) {
-        		return cat.getId();
-        	}
-        	return -1;
-        }
-        
-        public int getSiteId(String property) {
-        	Set<Integer> siteRestrictions = element.getFilter().getRestrictions(DimensionType.Site);
-        	if(siteRestrictions.size() == 1) {
-        		return siteRestrictions.iterator().next();
-        	}
-        	EntityCategory cat = (EntityCategory) getCategory(property, new Dimension(DimensionType.Site));
-        	if(cat != null) {
-        		return cat.getId();
-        	}
-        	return -1;
-        }
-        
-        public Month getMonth(String property) {   	
-        	MonthCategory cat = (MonthCategory) getCategory(property, new DateDimension(DateUnit.MONTH));
-        	if(cat != null) {
-        		return new Month(cat.getYear(), cat.getMonth());
-        	}
-    		if(element.getFilter().getDateRange().isClosed()) {
-    			// TODO(alex) : this should check to see whether the date range is actually a month range
-    			// but dateUtil is behaving weirdly because of conflicting timezones
-    			return new Month(dateUtil.getYear(element.getFilter().getMinDate()), dateUtil.getMonth(element.getFilter().getMinDate()));
-    		}
-        	throw new UnsupportedOperationException("This cell at property '" + property + "' is not constrained by month");
-        }
-        
-    }
-	
+		public PivotTableData.Axis getRowAxis() {
+			return rowAxis;
+		}
 
+		public PivotTableData.Axis getColAxis(String property) {
+			return columnMapping.columnAxisForProperty(property);
+		}
+
+		public DimensionCategory getCategory(String property, Dimension dimension) {
+			DimensionCategory category = findCategory(rowAxis, dimension);
+			if (category == null) {
+				return findCategory(getColAxis(property), dimension);
+			}
+			return category;
+		}
+
+		private DimensionCategory findCategory(PivotTableData.Axis leaf, Dimension dim) {
+			while (leaf != null) {
+				if (leaf.getDimension() != null && leaf.getDimension().equals(dim)) {
+					return leaf.getCategory();
+				}
+				leaf = leaf.getParent();
+			}
+			return null;
+		}
+
+		public int getIndicatorId(String property) {
+			Set<Integer> indicatorRestrictions = element.getFilter().getRestrictions(DimensionType.Indicator);
+			if (indicatorRestrictions.size() == 1) {
+				return indicatorRestrictions.iterator().next();
+			}
+			EntityCategory cat = (EntityCategory) getCategory(property, new Dimension(DimensionType.Indicator));
+			if (cat != null) {
+				return cat.getId();
+			}
+			return -1;
+		}
+
+		public int getSiteId(String property) {
+			Set<Integer> siteRestrictions = element.getFilter().getRestrictions(DimensionType.Site);
+			if (siteRestrictions.size() == 1) {
+				return siteRestrictions.iterator().next();
+			}
+			EntityCategory cat = (EntityCategory) getCategory(property, new Dimension(DimensionType.Site));
+			if (cat != null) {
+				return cat.getId();
+			}
+			return -1;
+		}
+
+		public Month getMonth(String property) {
+			MonthCategory cat = (MonthCategory) getCategory(property, new DateDimension(DateUnit.MONTH));
+			if (cat != null) {
+				return new Month(cat.getYear(), cat.getMonth());
+			}
+			if (element.getFilter().getDateRange().isClosed()) {
+				// TODO(alex) : this should check to see whether the date range
+				// is actually a month range
+				// but dateUtil is behaving weirdly because of conflicting
+				// timezones
+				return new Month(dateUtil.getYear(element.getFilter().getMinDate()), dateUtil.getMonth(element
+								.getFilter().getMinDate()));
+			}
+			throw new UnsupportedOperationException("This cell at property '" + property
+							+ "' is not constrained by month");
+		}
+
+	}
+
 	public void clear() {
-        if(grid != null) {
-        	grid.removeAllListeners();
-            removeAll();
-        }
-        store.removeAll();
+		if (grid != null) {
+			grid.removeAllListeners();
+			removeAll();
+		}
+		store.removeAll();
 	}
 
-    public void setData(final PivotElement element) {
-    	clear();
+	public void setData(final PivotElement element) {
+		clear();
 
-        this.element = element;
-        PivotTableData data = element.getContent().getData();
-        
-        this.columnMapping = new ColumnMapping(data, new RendererProvider(), HEADER_DECORATOR);
+		this.element = element;
+		PivotTableData data = element.getContent().getData();
 
-		for(PivotTableData.Axis axis : data.getRootRow().getChildren()) {
-            store.add(new PivotTableRow(axis), true);
-        }
+		this.columnMapping = new ColumnMapping(data, new RendererProvider(), HEADER_DECORATOR);
 
-        grid = new EditorTreeGrid<PivotTableRow>(store, columnMapping.getColumnModel());
-        grid.setView(new PivotGridPanelView());
-        grid.getStyle().setNodeCloseIcon(null);
-        grid.getStyle().setNodeOpenIcon(null);
-        grid.setAutoExpandColumn("header");
-        grid.setAutoExpandMin(150);
-        grid.addListener(Events.CellDoubleClick, new Listener<GridEvent<PivotTableRow>>() {
-            public void handleEvent(GridEvent<PivotTableRow> ge) {
-                if(ge.getColIndex() != 0) {
-                    eventBus.fireEvent(new PivotCellEvent(AppEvents.Drilldown,
-                            element,
-                            ge.getModel().getRowAxis(),
-                        	columnMapping.columnAxisForIndex(ge.getColIndex())));
-                }
-            }
-        });
-        grid.addListener(Events.HeaderClick, new Listener<GridEvent<PivotTableRow>>() {
+		for (PivotTableData.Axis axis : data.getRootRow().getChildren()) {
+			store.add(new PivotTableRow(axis), true);
+		}
 
+		grid = new EditorTreeGrid<PivotTableRow>(store, columnMapping.getColumnModel());
+		grid.setView(new PivotGridPanelView());
+		grid.getStyle().setNodeCloseIcon(null);
+		grid.getStyle().setNodeOpenIcon(null);
+		grid.setAutoExpandColumn("header");
+		grid.setAutoExpandMin(150);
+		grid.addListener(Events.CellDoubleClick, new Listener<GridEvent<PivotTableRow>>() {
+			public void handleEvent(GridEvent<PivotTableRow> ge) {
+				if (ge.getColIndex() != 0) {
+					eventBus.fireEvent(new PivotCellEvent(AppEvents.Drilldown, element, ge.getModel().getRowAxis(),
+									columnMapping.columnAxisForIndex(ge.getColIndex())));
+				}
+			}
+		});
+		grid.addListener(Events.HeaderClick, new Listener<GridEvent<PivotTableRow>>() {
+
 			@Override
 			public void handleEvent(GridEvent<PivotTableRow> event) {
-				fireEvent(Events.HeaderClick, new PivotGridHeaderEvent(event, columnMapping.columnAxisForIndex(event.getColIndex())));				
+				fireEvent(Events.HeaderClick,
+								new PivotGridHeaderEvent(event, columnMapping.columnAxisForIndex(event.getColIndex())));
 			}
 		});
-        grid.addListener(Events.CellClick, new Listener<GridEvent<PivotTableRow>>() {
+		grid.addListener(Events.CellClick, new Listener<GridEvent<PivotTableRow>>() {
 
 			@Override
 			public void handleEvent(GridEvent<PivotTableRow> event) {
-				if(event.getColIndex() == 0) {
+				if (event.getColIndex() == 0) {
 					fireEvent(Events.HeaderClick, new PivotGridHeaderEvent(event, event.getModel().getRowAxis()));
 				} else {
-					fireEvent(Events.CellClick, new PivotGridCellEvent(event, columnMapping.columnAxisForIndex(event.getColIndex())));
+					fireEvent(Events.CellClick,
+									new PivotGridCellEvent(event, columnMapping.columnAxisForIndex(event.getColIndex())));
 				}
 			}
-        });
-        grid.addListener(Events.BeforeEdit, new Listener<GridEvent<PivotTableRow>>() {
+		});
+		grid.addListener(Events.BeforeEdit, new Listener<GridEvent<PivotTableRow>>() {
 
 			@Override
 			public void handleEvent(GridEvent<PivotTableRow> be) {
-				if(!be.getModel().getRowAxis().isLeaf()) {
+				if (!be.getModel().getRowAxis().isLeaf()) {
 					be.setCancelled(true);
 				}
-				PivotGridCellEvent pivotEvent = new PivotGridCellEvent(be, columnMapping.columnAxisForIndex(be.getColIndex()));
+				PivotGridCellEvent pivotEvent = new PivotGridCellEvent(be, columnMapping.columnAxisForIndex(be
+								.getColIndex()));
 				IndicatorDTO indicator = indicators.get(pivotEvent.getIndicatorId());
-				if(indicator.isDirectDataEntryEnabled()) {
+				if (indicator.isDirectDataEntryEnabled()) {
 					prepareEditor(pivotEvent, indicator);
 				} else {
 					be.setCancelled(true);
 					Notification.show(I18N.CONSTANTS.dataEntry(), I18N.CONSTANTS.indicatorDirectEntry());
 				}
 			}
-        });
-        grid.addListener(Events.AfterEdit, new Listener<GridEvent<PivotTableRow>>() {
+		});
+		grid.addListener(Events.AfterEdit, new Listener<GridEvent<PivotTableRow>>() {
 
 			@Override
 			public void handleEvent(GridEvent<PivotTableRow> event) {
-				PivotGridCellEvent pivotEvent = new PivotGridCellEvent(event, columnMapping.columnAxisForIndex(event.getColIndex()));
+				PivotGridCellEvent pivotEvent = new PivotGridCellEvent(event, columnMapping.columnAxisForIndex(event
+								.getColIndex()));
 				updateTotalsAfterEdit(pivotEvent);
 				fireEvent(Events.AfterEdit, pivotEvent);
 			}
 		});
 
-        grid.addStyleName(PivotResources.INSTANCE.css().pivotTable());
-        
-        add(grid);
+		grid.addStyleName(PivotResources.INSTANCE.css().pivotTable());
 
-        layout();
+		add(grid);
 
-        new DelayedTask(new Listener<BaseEvent>() {
-            public void handleEvent(BaseEvent be) {
-                for(PivotTableRow row : store.getRootItems()) {
-                    grid.setExpanded(row, true, true);
-                }
-            }
-        }).delay(1);
+		layout();
 
-    } 
+		new DelayedTask(new Listener<BaseEvent>() {
+			public void handleEvent(BaseEvent be) {
+				for (PivotTableRow row : store.getRootItems()) {
+					grid.setExpanded(row, true, true);
+				}
+			}
+		}).delay(1);
 
-    private IndicatorDTO indicatorForCell(PivotGridCellEvent event) {
-    	int indicatorId = event.getIndicatorId();
-    	return indicators.get(indicatorId);
-    }
-    
-    protected void prepareEditor(PivotGridCellEvent event, IndicatorDTO indicator) {
-    	if(indicator != null) {
-        	ColumnConfig config = grid.getColumnModel().getColumn(event.getColIndex());
-    		IndicatorValueField field = (IndicatorValueField) config.getEditor().getField();	
-    		field.setIndicator(indicator);
-    	}
 	}
 
+	private IndicatorDTO indicatorForCell(PivotGridCellEvent event) {
+		int indicatorId = event.getIndicatorId();
+		return indicators.get(indicatorId);
+	}
 
+	protected void prepareEditor(PivotGridCellEvent event, IndicatorDTO indicator) {
+		if (indicator != null) {
+			ColumnConfig config = grid.getColumnModel().getColumn(event.getColIndex());
+			IndicatorValueField field = (IndicatorValueField) config.getEditor().getField();
+			field.setIndicator(indicator);
+		}
+	}
+
 	private void updateTotalsAfterEdit(PivotGridCellEvent event) {
 		// update the PivotTableData.Cell
-    	Double newValue = event.getModel().get(event.getProperty());
-    	event.getOrCreateCell().setValue(newValue);
-    	
-    	// update totals
-    	element.getContent().getData().updateTotals();
-    	
-    	syncGridWithContent();
-    	
+		Double newValue = event.getModel().get(event.getProperty());
+		event.getOrCreateCell().setValue(newValue);
+
+		// update totals
+		element.getContent().getData().updateTotals();
+
+		syncGridWithContent();
+
 	}
-    
-    private void syncGridWithContent() {
-    	for(PivotTableRow row : store.getAllItems()) {
-    		row.updateFromTree();
-    	}
-    	grid.getView().refresh(false);
-    }
 
+	private void syncGridWithContent() {
+		for (PivotTableRow row : store.getAllItems()) {
+			row.updateFromTree();
+		}
+		grid.getView().refresh(false);
+	}
 
-    private int findIndicatorId(PivotTableData.Axis axis) {
-        while(axis != null) {
-            if(axis.getDimension() != null && axis.getDimension().getType() == DimensionType.Indicator) {
-                return ((EntityCategory)axis.getCategory()).getId();
-            }
-            axis = axis.getParent();
-        }
-        return -1;
-    }
+	private int findIndicatorId(PivotTableData.Axis axis) {
+		while (axis != null) {
+			if (axis.getDimension() != null && axis.getDimension().getType() == DimensionType.Indicator) {
+				return ((EntityCategory) axis.getCategory()).getId();
+			}
+			axis = axis.getParent();
+		}
+		return -1;
+	}
 
-	
 	@Override
-	public HandlerRegistration addValueChangeHandler(
-			ValueChangeHandler<PivotElement> handler) {
+	public HandlerRegistration addValueChangeHandler(ValueChangeHandler<PivotElement> handler) {
 		return addHandler(handler, ValueChangeEvent.getType());
 	}
 
@@ -357,29 +357,31 @@
 	@Override
 	public void setValue(final PivotElement value) {
 		int databaseId = value.getFilter().getRestrictions(DimensionType.Database).iterator().next();
-		dispatcher.execute(GetIndicators.forDatabase(databaseId), new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading()), new AsyncCallback<IndicatorListResult>() {
+		dispatcher.execute(GetIndicators.forDatabase(databaseId),
+						new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading()),
+						new AsyncCallback<IndicatorListResult>() {
 
-			@Override
-			public void onFailure(Throwable caught) {				
-				// handled by monitor
-			}
+							@Override
+							public void onFailure(Throwable caught) {
+								// handled by monitor
+							}
 
-			@Override
-			public void onSuccess(IndicatorListResult result) {
-				indicators = new HashMap<Integer,IndicatorDTO>();
-				for(IndicatorDTO indicator : result.getData()) {
-					indicators.put(indicator.getId(), indicator);
-				}
-				setData(value);
-			}
-		});
-		
+							@Override
+							public void onSuccess(IndicatorListResult result) {
+								indicators = new HashMap<Integer, IndicatorDTO>();
+								for (IndicatorDTO indicator : result.getData()) {
+									indicators.put(indicator.getId(), indicator);
+								}
+								setData(value);
+							}
+						});
+
 	}
 
 	@Override
 	public void setValue(PivotElement value, boolean fireEvents) {
 		setData(element);
-		if(fireEvents) {
+		if (fireEvents) {
 			ValueChangeEvent.fire(this, value);
 		}
 	}
@@ -387,7 +389,7 @@
 	public Store<PivotTableRow> getStore() {
 		return store;
 	}
-	
+
 	public BatchCommand composeSaveCommand() {
 		BatchCommand batch = new BatchCommand();
 		for (Record record : store.getModifiedRecords()) {
@@ -408,16 +410,16 @@
 		@Override
 		public PivotCellRenderer getRendererForColumn(Axis column) {
 			int indicatorId = -1;
-			if(element.getFilter().isRestricted(DimensionType.Indicator)) {
+			if (element.getFilter().isRestricted(DimensionType.Indicator)) {
 				indicatorId = element.getFilter().getRestrictions(DimensionType.Indicator).iterator().next();
 			} else {
 				indicatorId = findIndicatorId(column);
 			}
-			if(indicatorId == -1) {
+			if (indicatorId == -1) {
 				return new MixedCellRenderer(indicators);
 			} else {
 				IndicatorDTO indicator = indicators.get(indicatorId);
-				if(indicator.isQualitative()) {
+				if (indicator.isQualitative()) {
 					return new QualitativeCellRenderer(indicator);
 				} else {
 					return new QuantitativeCellRenderer(indicator);
@@ -425,45 +427,79 @@
 			}
 		}
 
-	
 	}
 
 	private class GridHeaderDecorator implements HeaderDecorator {
 
 		@Override
 		public String decorateHeader(Axis axis) {
-			if(showAxisIcons && axis.isLeaf()) {
-	    		StringBuilder sb = new StringBuilder();
-	    		sb.append(IconUtil.iconHtml(PivotResources.INSTANCE.css().zoomIcon()));
-	    		
-	    		if(axis.getDimension() == null) {
-	    			return "";
-	    		}
-	    		
-	    		switch(axis.getDimension().getType()) {
-	    		case Indicator:
-	    			sb.append(IconUtil.iconHtml(PivotResources.INSTANCE.css().editIcon()));
-	    		}
-	    		sb.append("<span>");
-	    		sb.append(axis.getLabel());
-	    		sb.append("</span>");
-	    		return sb.toString();
-	    	} else {
-	    		return axis.getLabel();
-	    	}
+			if (showAxisIcons && axis.isLeaf()) {
+				StringBuilder sb = new StringBuilder();
+				sb.append(IconUtil.iconHtml(PivotResources.INSTANCE.css().zoomIcon()));
+
+				if (axis.getDimension() == null) {
+					return "";
+				}
+
+				switch (axis.getDimension().getType()) {
+				case Indicator:
+					sb.append(IconUtil.iconHtml(PivotResources.INSTANCE.css().editIcon()));
+				}
+				sb.append("<span>");
+				sb.append(axis.getLabel());
+				sb.append("</span>");
+				return sb.toString();
+			} else {
+				return axis.getLabel();
+			}
 		}
 
 		@Override
 		public String cornerCellHtml() {
-	    	if(showSwapIcon) {
-	    		return IconUtil.iconHtml(PivotResources.INSTANCE.css().swapIcon());
-	    	} else {
-	    		return "";
-	    	}
+			if (showSwapIcon) {
+				return IconUtil.iconHtml(PivotResources.INSTANCE.css().swapIcon());
+			} else {
+				return "";
+			}
 		}
 	}
-	
-	private final HeaderDecorator HEADER_DECORATOR = new GridHeaderDecorator();
 
-	
+	private HeaderDecorator HEADER_DECORATOR = new GridHeaderDecorator();
+
+	public void setHEADER_DECORATORWithOutEdit() {
+		HEADER_DECORATOR = new HeaderDecorator() {
+
+			@Override
+			public String decorateHeader(Axis axis) {
+				if (showAxisIcons && axis.isLeaf()) {
+					StringBuilder sb = new StringBuilder();
+					sb.append(IconUtil.iconHtml(PivotResources.INSTANCE.css().zoomIcon()));
+
+					if (axis.getDimension() == null) {
+						return "";
+					}
+
+					sb.append("<span>");
+					sb.append(axis.getLabel());
+					sb.append("</span>");
+					return sb.toString();
+				} else {
+					return axis.getLabel();
+				}
+			}
+
+			@Override
+			public String cornerCellHtml() {
+				if (showSwapIcon) {
+					return IconUtil.iconHtml(PivotResources.INSTANCE.css().swapIcon());
+				} else {
+					return "";
+				}
+			}
+		};
+	}
+
+	public EditorTreeGrid<PivotTableRow> getGrid() {
+		return grid;
+	}
 }
Index: src/main/java/org/sigmah/client/page/table/PivotPage.java
===================================================================
--- src/main/java/org/sigmah/client/page/table/PivotPage.java	(Revision 1500)
+++ src/main/java/org/sigmah/client/page/table/PivotPage.java	(Arbeitskopie)
@@ -97,543 +97,543 @@
  */
 public class PivotPage extends LayoutContainer implements Page {
 
-    protected EventBus eventBus;
-    protected Dispatcher service;
-    protected IStateManager stateMgr;
+	protected EventBus eventBus;
+	protected Dispatcher service;
+	protected IStateManager stateMgr;
 
-    protected ListStore<Dimension> rowDims;
-    protected ListStore<Dimension> colDims;
+	protected ListStore<Dimension> rowDims;
+	protected ListStore<Dimension> colDims;
 
-    protected TreeLoader<ModelData> loader;
-    protected TreeStore<ModelData> dimensionStore;
-    protected TreePanel<ModelData> treePanel;
+	protected TreeLoader<ModelData> loader;
+	protected TreeStore<ModelData> dimensionStore;
+	protected TreePanel<ModelData> treePanel;
 
-    protected ContentPanel filterPane;
-    protected IndicatorTreePanel indicatorPanel;
-    protected AdminFilterPanel adminPanel;
-    protected DateRangePanel datePanel;
-    protected PartnerFilterPanel partnerPanel;
-    protected LayoutContainer center;
-    protected PivotGridPanel gridContainer;
-    protected ToolBar gridToolBar;
-    private Listener<PivotCellEvent> initialDrillDownListener;
-    public static final PageId PAGE_ID = new PageId("pivot");
+	protected ContentPanel filterPane;
+	protected IndicatorTreePanel indicatorPanel;
+	protected AdminFilterPanel adminPanel;
+	protected DateRangePanel datePanel;
+	protected PartnerFilterPanel partnerPanel;
+	protected LayoutContainer center;
+	protected PivotGridPanel gridContainer;
+	protected ToolBar gridToolBar;
+	private Listener<PivotCellEvent> initialDrillDownListener;
+	public static final PageId PAGE_ID = new PageId("pivot");
 
-    @Inject
-    public PivotPage(EventBus eventBus, Dispatcher service, IStateManager stateMgr) {
+	@Inject
+	public PivotPage(EventBus eventBus, Dispatcher service, IStateManager stateMgr) {
 
-        this.eventBus = eventBus;
-        this.service = service;
-        this.stateMgr = stateMgr;
+		this.eventBus = eventBus;
+		this.service = service;
+		this.stateMgr = stateMgr;
 
-        BorderLayout borderLayout = new BorderLayout();
-        borderLayout.setEnableState(true);
-        setStateId("pivotPage");
-        setLayout(borderLayout);
+		BorderLayout borderLayout = new BorderLayout();
+		borderLayout.setEnableState(true);
+		setStateId("pivotPage");
+		setLayout(borderLayout);
 
-        createPane();
-        createFilterPane();
-        createIndicatorPanel();
-        createAdminFilter();
-        createDateFilter();
-        createPartnerFilter();
-        createGridContainer();
+		createPane();
+		createFilterPane();
+		createIndicatorPanel();
+		createAdminFilter();
+		createDateFilter();
+		createPartnerFilter();
+		createGridContainer();
 
-        initialDrillDownListener = new Listener<PivotCellEvent>() {
+		initialDrillDownListener = new Listener<PivotCellEvent>() {
 
-            public void handleEvent(PivotCellEvent be) {
-                createDrilldownPanel(be);
-            }
-        };
-        eventBus.addListener(AppEvents.Drilldown, initialDrillDownListener);
-    }
+			public void handleEvent(PivotCellEvent be) {
+				createDrilldownPanel(be);
+			}
+		};
+		eventBus.addListener(AppEvents.Drilldown, initialDrillDownListener);
+	}
 
-    public void createPane() {
+	public void createPane() {
 
-        VBoxLayout layout = new VBoxLayout();
-        layout.setPadding(new Padding(5));
-        layout.setVBoxLayoutAlign(VBoxLayout.VBoxLayoutAlign.STRETCH);
+		VBoxLayout layout = new VBoxLayout();
+		layout.setPadding(new Padding(5));
+		layout.setVBoxLayoutAlign(VBoxLayout.VBoxLayoutAlign.STRETCH);
 
-        ContentPanel pane = new ContentPanel();
-        pane.setHeading(I18N.CONSTANTS.dimensions());
-        pane.setScrollMode(Style.Scroll.NONE);
-        pane.setIcon(null);
-        pane.setLayout(layout);
+		ContentPanel pane = new ContentPanel();
+		pane.setHeading(I18N.CONSTANTS.dimensions());
+		pane.setScrollMode(Style.Scroll.NONE);
+		pane.setIcon(null);
+		pane.setLayout(layout);
 
-        VBoxLayoutData labelLayout = new VBoxLayoutData();
-        VBoxLayoutData listLayout = new VBoxLayoutData();
-        listLayout.setFlex(1.0);
+		VBoxLayoutData labelLayout = new VBoxLayoutData();
+		VBoxLayoutData listLayout = new VBoxLayoutData();
+		listLayout.setFlex(1.0);
 
-        createDimsTree();
-        pane.add(treePanel, listLayout);
-        pane.add(new Text(I18N.CONSTANTS.rows()), labelLayout);
+		createDimsTree();
+		pane.add(treePanel, listLayout);
+		pane.add(new Text(I18N.CONSTANTS.rows()), labelLayout);
 
-        rowDims = createStore();
-        rowDims.add(new Dimension(I18N.CONSTANTS.database(), DimensionType.Database));
-        rowDims.add(new Dimension(I18N.CONSTANTS.activity(), DimensionType.Activity));
-        rowDims.add(new Dimension(I18N.CONSTANTS.indicators(), DimensionType.Indicator));
-        pane.add(createList(rowDims), listLayout);
-        pane.add(new Text(I18N.CONSTANTS.columns()), labelLayout);
+		rowDims = createStore();
+		rowDims.add(new Dimension(I18N.CONSTANTS.database(), DimensionType.Database));
+		rowDims.add(new Dimension(I18N.CONSTANTS.activity(), DimensionType.Activity));
+		rowDims.add(new Dimension(I18N.CONSTANTS.indicators(), DimensionType.Indicator));
+		pane.add(createList(rowDims), listLayout);
+		pane.add(new Text(I18N.CONSTANTS.columns()), labelLayout);
 
-        colDims = createStore();
-        colDims.add(new Dimension(I18N.CONSTANTS.partner(), DimensionType.Partner));
-        pane.add(createList(colDims), listLayout);
+		colDims = createStore();
+		colDims.add(new Dimension(I18N.CONSTANTS.partner(), DimensionType.Partner));
+		pane.add(createList(colDims), listLayout);
 
-        BorderLayoutData east = new BorderLayoutData(Style.LayoutRegion.EAST);
-        east.setCollapsible(true);
-        east.setSplit(true);
-        east.setMargins(new Margins(0, 5, 0, 0));
+		BorderLayoutData east = new BorderLayoutData(Style.LayoutRegion.EAST);
+		east.setCollapsible(true);
+		east.setSplit(true);
+		east.setMargins(new Margins(0, 5, 0, 0));
 
-        add(pane, east);
+		add(pane, east);
 
-    }
+	}
 
-    private void createDimsTree() {
-        // tree loader
-        loader = new BaseTreeLoader<ModelData>(new Proxy()) {
+	private void createDimsTree() {
+		// tree loader
+		loader = new BaseTreeLoader<ModelData>(new Proxy()) {
 
-            @Override
-            public boolean hasChildren(ModelData parent) {
-                if (parent instanceof AttributeGroupDTO) {
-                    return !((AttributeGroupDTO) parent).isEmpty();
-                }
-                return parent instanceof DimensionFolder || parent instanceof AttributeGroupDTO;
-            }
-        };
+			@Override
+			public boolean hasChildren(ModelData parent) {
+				if (parent instanceof AttributeGroupDTO) {
+					return !((AttributeGroupDTO) parent).isEmpty();
+				}
+				return parent instanceof DimensionFolder || parent instanceof AttributeGroupDTO;
+			}
+		};
 
-        // tree store
-        dimensionStore = new TreeStore<ModelData>(loader);
-        dimensionStore.setKeyProvider(new ModelKeyProvider<ModelData>() {
+		// tree store
+		dimensionStore = new TreeStore<ModelData>(loader);
+		dimensionStore.setKeyProvider(new ModelKeyProvider<ModelData>() {
 
-            public String getKey(ModelData model) {
-                return "node_" + model.get("id");
-            }
-        });
+			public String getKey(ModelData model) {
+				return "node_" + model.get("id");
+			}
+		});
 
-        treePanel = new TreePanel<ModelData>(dimensionStore);
-        treePanel.setBorders(true);
-        treePanel.setCheckable(true);
-        treePanel.setCheckNodes(TreePanel.CheckNodes.LEAF);
-        treePanel.setCheckStyle(TreePanel.CheckCascade.NONE);
-        treePanel.getStyle().setNodeCloseIcon(null);
-        treePanel.getStyle().setNodeOpenIcon(null);
+		treePanel = new TreePanel<ModelData>(dimensionStore);
+		treePanel.setBorders(true);
+		treePanel.setCheckable(true);
+		treePanel.setCheckNodes(TreePanel.CheckNodes.LEAF);
+		treePanel.setCheckStyle(TreePanel.CheckCascade.NONE);
+		treePanel.getStyle().setNodeCloseIcon(null);
+		treePanel.getStyle().setNodeOpenIcon(null);
 
-        treePanel.setStateful(true);
-        treePanel.setLabelProvider(new ModelStringProvider<ModelData>() {
+		treePanel.setStateful(true);
+		treePanel.setLabelProvider(new ModelStringProvider<ModelData>() {
 
-            public String getStringValue(ModelData model, String property) {
-                return trim((String) model.get("caption"));
-            }
-        });
+			public String getStringValue(ModelData model, String property) {
+				return trim((String) model.get("caption"));
+			}
+		});
 
-        /* enable drag and drop for dev */
-        // TreePanelDragSource source = new TreePanelDragSource(treePanel);
-        // source.setTreeSource(DND.TreeSource.LEAF);
-        /* end enable drag and drop for dev */
+		/* enable drag and drop for dev */
+		// TreePanelDragSource source = new TreePanelDragSource(treePanel);
+		// source.setTreeSource(DND.TreeSource.LEAF);
+		/* end enable drag and drop for dev */
 
-        treePanel.setId("statefullavaildims");
-        treePanel.collapseAll();
+		treePanel.setId("statefullavaildims");
+		treePanel.collapseAll();
 
-        final ArrayList<ModelData> list = new ArrayList<ModelData>(4);
-        list.add(new Dimension(I18N.CONSTANTS.database(), DimensionType.Database));
-        list.add(new Dimension(I18N.CONSTANTS.activity(), DimensionType.Activity));
-        list.add(new Dimension(I18N.CONSTANTS.indicators(), DimensionType.Indicator));
-        list.add(new Dimension(I18N.CONSTANTS.partner(), DimensionType.Partner));
+		final ArrayList<ModelData> list = new ArrayList<ModelData>(4);
+		list.add(new Dimension(I18N.CONSTANTS.database(), DimensionType.Database));
+		list.add(new Dimension(I18N.CONSTANTS.activity(), DimensionType.Activity));
+		list.add(new Dimension(I18N.CONSTANTS.indicators(), DimensionType.Indicator));
+		list.add(new Dimension(I18N.CONSTANTS.partner(), DimensionType.Partner));
 
-        list.add(new DimensionFolder(I18N.CONSTANTS.geography(), DimensionType.AdminLevel, 0, 0));
-        list.add(new DimensionFolder(I18N.CONSTANTS.time(), DimensionType.Date, 0, 0));
-        list.add(new DimensionFolder(I18N.CONSTANTS.attributes(), DimensionType.AttributeGroup, 0, 0));
+		list.add(new DimensionFolder(I18N.CONSTANTS.geography(), DimensionType.AdminLevel, 0, 0));
+		list.add(new DimensionFolder(I18N.CONSTANTS.time(), DimensionType.Date, 0, 0));
+		list.add(new DimensionFolder(I18N.CONSTANTS.attributes(), DimensionType.AttributeGroup, 0, 0));
 
-        dimensionStore.add(list, false);
+		dimensionStore.add(list, false);
 
-        setDimensionChecked(list.get(0), true);
-        setDimensionChecked(list.get(1), true);
-        setDimensionChecked(list.get(2), true);
-        setDimensionChecked(list.get(3), true);
+		setDimensionChecked(list.get(0), true);
+		setDimensionChecked(list.get(1), true);
+		setDimensionChecked(list.get(2), true);
+		setDimensionChecked(list.get(3), true);
 
-        treePanel.addCheckListener(new CheckChangedListener<ModelData>() {
+		treePanel.addCheckListener(new CheckChangedListener<ModelData>() {
 
-            public void checkChanged(CheckChangedEvent<ModelData> event) {
-                List<ModelData> checked = event.getCheckedSelection();
-                for (ModelData r : rowDims.getModels()) {
-                    if (checked.contains(r)) {
-                        checked.remove(r);
-                    } else {
-                        rowDims.remove((Dimension) r);
-                    }
-                }
+			public void checkChanged(CheckChangedEvent<ModelData> event) {
+				List<ModelData> checked = event.getCheckedSelection();
+				for (ModelData r : rowDims.getModels()) {
+					if (checked.contains(r)) {
+						checked.remove(r);
+					} else {
+						rowDims.remove((Dimension) r);
+					}
+				}
 
-                for (ModelData c : colDims.getModels()) {
-                    if (checked.contains(c)) {
-                        checked.remove(c);
-                    } else {
-                        colDims.remove((Dimension) c);
-                    }
-                }
+				for (ModelData c : colDims.getModels()) {
+					if (checked.contains(c)) {
+						checked.remove(c);
+					} else {
+						colDims.remove((Dimension) c);
+					}
+				}
 
-                for (ModelData newItem : checked) {
-                    if (rowDims.getModels().size() > colDims.getModels().size()) {
-                        colDims.add((Dimension) newItem);
-                    } else {
-                        rowDims.add((Dimension) newItem);
-                    }
-                }
-            }
-        });
-    }
+				for (ModelData newItem : checked) {
+					if (rowDims.getModels().size() > colDims.getModels().size()) {
+						colDims.add((Dimension) newItem);
+					} else {
+						rowDims.add((Dimension) newItem);
+					}
+				}
+			}
+		});
+	}
 
-    private ListStore<Dimension> createStore() {
-        ListStore<Dimension> store = new ListStore<Dimension>();
-        store.addStoreListener(new StoreListener<Dimension>() {
+	private ListStore<Dimension> createStore() {
+		ListStore<Dimension> store = new ListStore<Dimension>();
+		store.addStoreListener(new StoreListener<Dimension>() {
 
-            @Override
-            public void storeDataChanged(StoreEvent<Dimension> se) {
-                onDimensionsChanged();
-            }
-        });
-        return store;
-    }
+			@Override
+			public void storeDataChanged(StoreEvent<Dimension> se) {
+				onDimensionsChanged();
+			}
+		});
+		return store;
+	}
 
-    private ListView createList(ListStore<Dimension> store) {
-        ListView<Dimension> list = new ListView<Dimension>(store);
-        list.setDisplayProperty("caption");
-        ListViewDragSource source = new ListViewDragSource(list);
-        ListViewDropTarget target = new ListViewDropTarget(list);
-        target.setFeedback(DND.Feedback.INSERT);
-        target.setAllowSelfAsSource(true);
-        return list;
-    }
+	private ListView createList(ListStore<Dimension> store) {
+		ListView<Dimension> list = new ListView<Dimension>(store);
+		list.setDisplayProperty("caption");
+		ListViewDragSource source = new ListViewDragSource(list);
+		ListViewDropTarget target = new ListViewDropTarget(list);
+		target.setFeedback(DND.Feedback.INSERT);
+		target.setAllowSelfAsSource(true);
+		return list;
+	}
 
-    private void createFilterPane() {
-        filterPane = new ContentPanel();
-        filterPane.setHeading(I18N.CONSTANTS.filter());
-        filterPane.setIcon(IconImageBundle.ICONS.filter());
-        filterPane.setLayout(new AccordionLayout());
+	private void createFilterPane() {
+		filterPane = new ContentPanel();
+		filterPane.setHeading(I18N.CONSTANTS.filter());
+		filterPane.setIcon(IconImageBundle.ICONS.filter());
+		filterPane.setLayout(new AccordionLayout());
 
-        BorderLayoutData west = new BorderLayoutData(Style.LayoutRegion.WEST);
-        west.setMinSize(250);
-        west.setSize(250);
-        west.setCollapsible(true);
-        west.setSplit(true);
-        west.setMargins(new Margins(0, 0, 0, 0));
-        add(filterPane, west);
-    }
+		BorderLayoutData west = new BorderLayoutData(Style.LayoutRegion.WEST);
+		west.setMinSize(250);
+		west.setSize(250);
+		west.setCollapsible(true);
+		west.setSplit(true);
+		west.setMargins(new Margins(0, 0, 0, 0));
+		add(filterPane, west);
+	}
 
-    private void createIndicatorPanel() {
-        indicatorPanel = new IndicatorTreePanel(service, true, getMonitor());
-        indicatorPanel.setHeaderVisible(true);
-        indicatorPanel.setHeading(I18N.CONSTANTS.indicators());
-        indicatorPanel.setIcon(IconImageBundle.ICONS.indicator());
-        filterPane.add(indicatorPanel);
-    }
+	private void createIndicatorPanel() {
+		indicatorPanel = new IndicatorTreePanel(service, true, getMonitor());
+		indicatorPanel.setHeaderVisible(true);
+		indicatorPanel.setHeading(I18N.CONSTANTS.indicators());
+		indicatorPanel.setIcon(IconImageBundle.ICONS.indicator());
+		filterPane.add(indicatorPanel);
+	}
 
-    private void createAdminFilter() {
-        adminPanel = new AdminFilterPanel(service);
-        adminPanel.setHeading(I18N.CONSTANTS.filterByGeography());
-        adminPanel.setIcon(IconImageBundle.ICONS.filter());
-        filterPane.add(adminPanel);
-    }
+	private void createAdminFilter() {
+		adminPanel = new AdminFilterPanel(service);
+		adminPanel.setHeading(I18N.CONSTANTS.filterByGeography());
+		adminPanel.setIcon(IconImageBundle.ICONS.filter());
+		filterPane.add(adminPanel);
+	}
 
-    private void createDateFilter() {
-        datePanel = new DateRangePanel();
-        filterPane.add(datePanel);
-    }
+	private void createDateFilter() {
+		datePanel = new DateRangePanel();
+		filterPane.add(datePanel);
+	}
 
-    private void createPartnerFilter() {
-        partnerPanel = new PartnerFilterPanel(service);
-        filterPane.add(partnerPanel);
-    }
+	private void createPartnerFilter() {
+		partnerPanel = new PartnerFilterPanel(service);
+		filterPane.add(partnerPanel);
+	}
 
-    private void onDimensionsChanged() {
-        // TODO Auto-generated method stub
+	private void onDimensionsChanged() {
+		// TODO Auto-generated method stub
 
-    }
+	}
 
-    private void createGridContainer() {
+	private void createGridContainer() {
 
-        center = new LayoutContainer();
-        center.setLayout(new BorderLayout());
-        add(center, new BorderLayoutData(Style.LayoutRegion.CENTER));
+		center = new LayoutContainer();
+		center.setLayout(new BorderLayout());
+		add(center, new BorderLayoutData(Style.LayoutRegion.CENTER));
 
-        gridContainer = new PivotGridPanel(eventBus, service);
-        gridContainer.setHeaderVisible(true);
-        gridContainer.setHeading(I18N.CONSTANTS.preview());
+		gridContainer = new PivotGridPanel(eventBus, service);
+		gridContainer.setHeaderVisible(true);
+		gridContainer.setHeading(I18N.CONSTANTS.preview());
 
-        gridToolBar = new ToolBar();
-        gridContainer.setTopComponent(gridToolBar);
+		gridToolBar = new ToolBar();
+		gridContainer.setTopComponent(gridToolBar);
 
-        SelectionListener<ButtonEvent> listener = new SelectionListener<ButtonEvent>() {
+		SelectionListener<ButtonEvent> listener = new SelectionListener<ButtonEvent>() {
 
-            @Override
-            public void componentSelected(ButtonEvent ce) {
-                if (ce.getButton().getItemId() != null) {
-                    onUIAction(ce.getButton().getItemId());
-                }
-            }
-        };
+			@Override
+			public void componentSelected(ButtonEvent ce) {
+				if (ce.getButton().getItemId() != null) {
+					onUIAction(ce.getButton().getItemId());
+				}
+			}
+		};
 
-        Button refresh = new Button(I18N.CONSTANTS.refreshPreview(), IconImageBundle.ICONS.refresh(), listener);
-        refresh.setItemId(UIActions.refresh);
-        gridToolBar.add(refresh);
+		Button refresh = new Button(I18N.CONSTANTS.refreshPreview(), IconImageBundle.ICONS.refresh(), listener);
+		refresh.setItemId(UIActions.refresh);
+		gridToolBar.add(refresh);
 
-        Button export = new Button(I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel(), listener);
-        export.setItemId(UIActions.export);
-        gridToolBar.add(export);
+		Button export = new Button(I18N.CONSTANTS.export(), IconImageBundle.ICONS.excel(), listener);
+		export.setItemId(UIActions.export);
+		gridToolBar.add(export);
 
-        center.add(gridContainer, new BorderLayoutData(Style.LayoutRegion.CENTER));
-    }
+		center.add(gridContainer, new BorderLayoutData(Style.LayoutRegion.CENTER));
+	}
 
-    protected void createDrilldownPanel(PivotCellEvent event) {
+	protected void createDrilldownPanel(PivotCellEvent event) {
 
-        BorderLayoutData layout = new BorderLayoutData(Style.LayoutRegion.SOUTH);
-        layout.setSplit(true);
-        layout.setCollapsible(true);
+		BorderLayoutData layout = new BorderLayoutData(Style.LayoutRegion.SOUTH);
+		layout.setSplit(true);
+		layout.setCollapsible(true);
 
-        DrillDownEditor drilldownEditor = new DrillDownEditor(eventBus, service, stateMgr, new DateUtilGWTImpl());
-        drilldownEditor.onDrillDown(event);
+		DrillDownEditor drilldownEditor = new DrillDownEditor(eventBus, service, stateMgr, new DateUtilGWTImpl());
+		drilldownEditor.onDrillDown(event);
 
-        center.add(drilldownEditor, layout);
+		center.add(drilldownEditor, layout);
 
-        // disconnect our initial drilldown listener;
-        // subsequent events will be handled by the DrillDownEditor's listener
-        eventBus.removeListener(AppEvents.Drilldown, initialDrillDownListener);
+		// disconnect our initial drilldown listener;
+		// subsequent events will be handled by the DrillDownEditor's listener
+		eventBus.removeListener(AppEvents.Drilldown, initialDrillDownListener);
 
-        layout();
+		layout();
 
-    }
+	}
 
-    public ListStore<Dimension> getRowStore() {
-        return rowDims;
-    }
+	public ListStore<Dimension> getRowStore() {
+		return rowDims;
+	}
 
-    public ListStore<Dimension> getColStore() {
-        return colDims;
-    }
+	public ListStore<Dimension> getColStore() {
+		return colDims;
+	}
 
-    public void setSchema(SchemaDTO result) {
-        // indicatorPanel.setSchema(result);
-    }
+	public void setSchema(SchemaDTO result) {
+		// indicatorPanel.setSchema(result);
+	}
 
-    @Override
-    public PageId getPageId() {
-        return PAGE_ID;
-    }
+	@Override
+	public PageId getPageId() {
+		return PAGE_ID;
+	}
 
-    @Override
-    public Object getWidget() {
-        return this;
-    }
+	@Override
+	public Object getWidget() {
+		return this;
+	}
 
-    @Override
-    public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
-        callback.onDecided(NavigationError.NONE);
-    }
+	@Override
+	public void requestToNavigateAway(PageState place, final NavigationCallback callback) {
+		callback.onDecided(NavigationError.NONE);
+	}
 
-    @Override
-    public String beforeWindowCloses() {
-        return null;
-    }
+	@Override
+	public String beforeWindowCloses() {
+		return null;
+	}
 
-    public boolean navigate(PageState place) {
-        return true;
-    }
+	public boolean navigate(PageState place) {
+		return true;
+	}
 
-    public void enableUIAction(String actionId, boolean enabled) {
-        Component button = gridToolBar.getItemByItemId(actionId);
-        if (button != null) {
-            button.setEnabled(enabled);
-        }
-    }
+	public void enableUIAction(String actionId, boolean enabled) {
+		Component button = gridToolBar.getItemByItemId(actionId);
+		if (button != null) {
+			button.setEnabled(enabled);
+		}
+	}
 
-    public void setDimensionChecked(ModelData d, boolean checked) {
-        treePanel.setChecked(d, checked);
-    }
+	public void setDimensionChecked(ModelData d, boolean checked) {
+		treePanel.setChecked(d, checked);
+	}
 
-    public void setContent(PivotTableElement element) {
-        gridContainer.setData(element);
-    }
+	public void setContent(PivotTableElement element) {
+		gridContainer.setData(element);
+	}
 
-    public AsyncMonitor getMonitor() {
-        return new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading());
-    }
+	public AsyncMonitor getMonitor() {
+		return new MaskingAsyncMonitor(this, I18N.CONSTANTS.loading());
+	}
 
-    public List<IndicatorDTO> getSelectedIndicators() {
-        return indicatorPanel.getSelection();
-    }
+	public List<IndicatorDTO> getSelectedIndicators() {
+		return indicatorPanel.getSelection();
+	}
 
-    public List<AdminEntityDTO> getAdminRestrictions() {
-        return adminPanel.getSelection();
-    }
+	public List<AdminEntityDTO> getAdminRestrictions() {
+		return adminPanel.getSelection();
+	}
 
-    public Date getMinDate() {
-        return datePanel.getMinDate();
-    }
+	public Date getMinDate() {
+		return datePanel.getMinDate();
+	}
 
-    public Date getMaxDate() {
-        return datePanel.getMaxDate();
-    }
+	public Date getMaxDate() {
+		return datePanel.getMaxDate();
+	}
 
-    public List<PartnerDTO> getPartnerRestrictions() {
-        return partnerPanel.getSelection();
-    }
+	public List<PartnerDTO> getPartnerRestrictions() {
+		return partnerPanel.getSelection();
+	}
 
-    public TreeStore<ModelData> getDimensionStore() {
-        return this.dimensionStore;
-    }
+	public TreeStore<ModelData> getDimensionStore() {
+		return this.dimensionStore;
+	}
 
-    private String trim(String s) {
-        if (s == null || "".equals(s)) {
-            return "NO_NAME";
-        }
-        s = s.trim();
-        if (s.length() > 20) {
-            return s.substring(0, 19) + "...";
-        } else {
-            return s;
-        }
-    }
+	private String trim(String s) {
+		if (s == null || "".equals(s)) {
+			return "NO_NAME";
+		}
+		s = s.trim();
+		if (s.length() > 20) {
+			return s.substring(0, 19) + "...";
+		} else {
+			return s;
+		}
+	}
 
-    private class Proxy implements DataProxy<List<ModelData>> {
+	private class Proxy implements DataProxy<List<ModelData>> {
 
-        private SchemaDTO schema;
+		private SchemaDTO schema;
 
-        public void load(DataReader<List<ModelData>> listDataReader, final Object parent,
-                final AsyncCallback<List<ModelData>> callback) {
+		public void load(DataReader<List<ModelData>> listDataReader, final Object parent,
+						final AsyncCallback<List<ModelData>> callback) {
 
-            if (schema == null) {
-                service.execute(new GetSchema(), getMonitor(), new AsyncCallback<SchemaDTO>() {
+			if (schema == null) {
+				service.execute(new GetSchema(), getMonitor(), new AsyncCallback<SchemaDTO>() {
 
-                    public void onFailure(Throwable caught) {
-                        callback.onFailure(caught);
-                    }
+					public void onFailure(Throwable caught) {
+						callback.onFailure(caught);
+					}
 
-                    public void onSuccess(SchemaDTO result) {
-                        schema = result;
-                        loadChildren(parent, callback);
-                    }
-                });
-            } else {
-                loadChildren(parent, callback);
-            }
-        }
+					public void onSuccess(SchemaDTO result) {
+						schema = result;
+						loadChildren(parent, callback);
+					}
+				});
+			} else {
+				loadChildren(parent, callback);
+			}
+		}
 
-        public void loadChildren(Object parent, final AsyncCallback<List<ModelData>> callback) {
-            if (parent != null && parent instanceof DimensionFolder) {
+		public void loadChildren(Object parent, final AsyncCallback<List<ModelData>> callback) {
+			if (parent != null && parent instanceof DimensionFolder) {
 
-                DimensionFolder folder = (DimensionFolder) parent;
-                DimensionType type = folder.getType();
-                final ArrayList<ModelData> dims = new ArrayList<ModelData>();
+				DimensionFolder folder = (DimensionFolder) parent;
+				DimensionType type = folder.getType();
+				final ArrayList<ModelData> dims = new ArrayList<ModelData>();
 
-                if (type == DimensionType.Date) {
-                    // add time dimension
-                    int idSeq = 0;
-                    dims.add(new DateDimension(I18N.CONSTANTS.year(), idSeq++, DateUnit.YEAR, null));
-                    dims.add(new DateDimension(I18N.CONSTANTS.quarter(), idSeq++, DateUnit.QUARTER, null));
-                    dims.add(new DateDimension(I18N.CONSTANTS.month(), idSeq++, DateUnit.MONTH, null));
+				if (type == DimensionType.Date) {
+					// add time dimension
+					int idSeq = 0;
+					dims.add(new DateDimension(I18N.CONSTANTS.year(), idSeq++, DateUnit.YEAR, null));
+					dims.add(new DateDimension(I18N.CONSTANTS.quarter(), idSeq++, DateUnit.QUARTER, null));
+					dims.add(new DateDimension(I18N.CONSTANTS.month(), idSeq++, DateUnit.MONTH, null));
 
-                } else if (type == DimensionType.AdminLevel) {
-                    // add geo dimensions
-                    for (CountryDTO country : schema.getCountries()) {
-                        for (AdminLevelDTO level : country.getAdminLevels()) {
-                            dims.add(new AdminDimension(level.getName(), level.getId()));
-                        }
-                    }
+				} else if (type == DimensionType.AdminLevel) {
+					// add geo dimensions
+					for (CountryDTO country : schema.getCountries()) {
+						for (AdminLevelDTO level : country.getAdminLevels()) {
+							dims.add(new AdminDimension(level.getName(), level.getId()));
+						}
+					}
 
-                } else if (type == DimensionType.AttributeGroup) {
-                    if (folder.getDepth() == 0) {
-                        // folders for database names
-                        for (UserDatabaseDTO db : schema.getDatabases()) {
-                            for (ActivityDTO act : db.getActivities()) {
-                                if (act.getAttributeGroups() != null && act.getAttributeGroups().size() > 0) {
-                                    dims.add(new DimensionFolder(db.getName(), DimensionType.AttributeGroup, folder
-                                        .getDepth() + 1, db.getId()));
-                                    break;
-                                }
-                            }
-                        }
+				} else if (type == DimensionType.AttributeGroup) {
+					if (folder.getDepth() == 0) {
+						// folders for database names
+						for (UserDatabaseDTO db : schema.getDatabases()) {
+							for (ActivityDTO act : db.getActivities()) {
+								if (act.getAttributeGroups() != null && act.getAttributeGroups().size() > 0) {
+									dims.add(new DimensionFolder(db.getName(), DimensionType.AttributeGroup, folder
+													.getDepth() + 1, db.getId()));
+									break;
+								}
+							}
+						}
 
-                    } else if (folder.getDepth() == 1) {
-                        // folders for activity names
-                        UserDatabaseDTO db = schema.getDatabaseById(folder.getId());
-                        for (ActivityDTO act : db.getActivities()) {
-                            if (act.getAttributeGroups() != null && act.getAttributeGroups().size() > 0) {
-                                dims.add(new DimensionFolder(act.getName(), DimensionType.AttributeGroup, folder
-                                    .getDepth() + 1, act.getId()));
-                                break;
-                            }
-                        }
+					} else if (folder.getDepth() == 1) {
+						// folders for activity names
+						UserDatabaseDTO db = schema.getDatabaseById(folder.getId());
+						for (ActivityDTO act : db.getActivities()) {
+							if (act.getAttributeGroups() != null && act.getAttributeGroups().size() > 0) {
+								dims.add(new DimensionFolder(act.getName(), DimensionType.AttributeGroup, folder
+												.getDepth() + 1, act.getId()));
+								break;
+							}
+						}
 
-                    } else if (folder.getDepth() == 2) {
-                        // attribute groups
-                        ActivityDTO act = schema.getActivityById(folder.getId());
-                        for (AttributeGroupDTO attrGroup : act.getAttributeGroups()) {
-                            dims.add(new AttributeGroupDimension(attrGroup.getName(), attrGroup.getId()));
-                        }
+					} else if (folder.getDepth() == 2) {
+						// attribute groups
+						ActivityDTO act = schema.getActivityById(folder.getId());
+						for (AttributeGroupDTO attrGroup : act.getAttributeGroups()) {
+							dims.add(new AttributeGroupDimension(attrGroup.getName(), attrGroup.getId()));
+						}
 
-                    } else {
-                        assert false;
-                    }
-                } else {
-                    assert false;
-                }
-                callback.onSuccess(dims);
-            }
-        }
-    }
+					} else {
+						assert false;
+					}
+				} else {
+					assert false;
+				}
+				callback.onSuccess(dims);
+			}
+		}
+	}
 
-    private PivotTableElement createElement() {
-        PivotTableElement table = new PivotTableElement();
-        table.setRowDimensions(getRowStore().getModels());
-        table.setColumnDimensions(getColStore().getModels());
+	private PivotTableElement createElement() {
+		PivotTableElement table = new PivotTableElement();
+		table.setRowDimensions(getRowStore().getModels());
+		table.setColumnDimensions(getColStore().getModels());
 
-        List<IndicatorDTO> selectedIndicators = getSelectedIndicators();
-        for (IndicatorDTO indicator : selectedIndicators) {
-            table.getFilter().addRestriction(DimensionType.Indicator, indicator.getId());
-        }
+		List<IndicatorDTO> selectedIndicators = getSelectedIndicators();
+		for (IndicatorDTO indicator : selectedIndicators) {
+			table.getFilter().addRestriction(DimensionType.Indicator, indicator.getId());
+		}
 
-        List<AdminEntityDTO> entities = getAdminRestrictions();
-        for (AdminEntityDTO entity : entities) {
-            table.getFilter().addRestriction(DimensionType.AdminLevel, entity.getId());
-        }
+		List<AdminEntityDTO> entities = getAdminRestrictions();
+		for (AdminEntityDTO entity : entities) {
+			table.getFilter().addRestriction(DimensionType.AdminLevel, entity.getId());
+		}
 
-        List<PartnerDTO> partners = getPartnerRestrictions();
-        for (PartnerDTO entity : partners) {
-            table.getFilter().addRestriction(DimensionType.Partner, entity.getId());
-        }
+		List<PartnerDTO> partners = getPartnerRestrictions();
+		for (PartnerDTO entity : partners) {
+			table.getFilter().addRestriction(DimensionType.Partner, entity.getId());
+		}
 
-        if (getMinDate() != null) {
-            table.getFilter().setMinDate(getMinDate());
-        }
+		if (getMinDate() != null) {
+			table.getFilter().setMinDate(getMinDate());
+		}
 
-        if (getMaxDate() != null) {
-            table.getFilter().setMaxDate(getMaxDate());
-        }
-        return table;
-    }
+		if (getMaxDate() != null) {
+			table.getFilter().setMaxDate(getMaxDate());
+		}
+		return table;
+	}
 
-    public void onUIAction(String itemId) {
-        if (UIActions.refresh.equals(itemId)) {
-            final PivotTableElement element = createElement();
-            service.execute(new GenerateElement(element), getMonitor(), new AsyncCallback<Content>() {
+	public void onUIAction(String itemId) {
+		if (UIActions.refresh.equals(itemId)) {
+			final PivotTableElement element = createElement();
+			service.execute(new GenerateElement(element), getMonitor(), new AsyncCallback<Content>() {
 
-                public void onFailure(Throwable throwable) {
-                    MessageBox.alert(I18N.CONSTANTS.error(), I18N.CONSTANTS.errorOnServer(), null);
-                }
+				public void onFailure(Throwable throwable) {
+					MessageBox.alert(I18N.CONSTANTS.error(), I18N.CONSTANTS.errorOnServer(), null);
+				}
 
-                public void onSuccess(Content content) {
-                    element.setContent((PivotContent) content);
-                    setContent(element);
-                }
-            });
+				public void onSuccess(Content content) {
+					element.setContent((PivotContent) content);
+					setContent(element);
+				}
+			});
 
-        } else if (UIActions.export.equals(itemId)) {
-            service.execute(new RenderElement(createElement(), RenderElement.Format.Excel), getMonitor(),
-                new DownloadCallback(eventBus, "pivotTable"));
-        }
-    }
+		} else if (UIActions.export.equals(itemId)) {
+			service.execute(new RenderElement(createElement(), RenderElement.Format.Excel), getMonitor(),
+							new DownloadCallback(eventBus, "pivotTable"));
+		}
+	}
 
-    @Override
-    public void shutdown() {
+	@Override
+	public void shutdown() {
 
-    }
+	}
 }
Index: src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Revision 1501)
+++ src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(Arbeitskopie)
@@ -71,6 +71,24 @@
 	/**
 	 * Show global export button in projects list
 	 */
+
+	VIEW_INDICATOR,
+	/**
+	 * for viewing the two indicator sub-tabs
+	 */
+
+	MANAGE_INDICATOR,
+
+	/**
+	 * for creating/deleting/modifying indicator definitions
+	 */
+
+	EDIT_INDICATOR,
+
+	/**
+	 * for editing values of existing indicators
+	 */
+
 	GLOBAL_EXPORT;
 
 	public static String getName(GlobalPermissionEnum gp) {
@@ -112,6 +130,16 @@
 		case GLOBAL_EXPORT:
 			gpName = I18N.CONSTANTS.globalExport();
 			break;
+
+		case VIEW_INDICATOR:
+			gpName = I18N.CONSTANTS.VIEW_INDICATOR();
+			break;
+		case MANAGE_INDICATOR:
+			gpName = I18N.CONSTANTS.MANAGE_INDICATOR();
+			break;
+		case EDIT_INDICATOR:
+			gpName = I18N.CONSTANTS.EDIT_INDICATOR();
+			break;
 		default:
 			gpName = null;
 		}
