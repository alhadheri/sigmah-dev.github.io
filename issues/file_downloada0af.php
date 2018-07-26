Index: sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java
===================================================================
--- sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java   (revision 1561)
+++ sigmah/src/main/java/org/sigmah/shared/dto/ProjectModelDTO.java   (working copy)
@@ -176,33 +176,51 @@
          List<FlexibleElementDTO> allElements = new ArrayList<FlexibleElementDTO>();
          
          List<LayoutGroupDTO> layoutGroupDTOs=new ArrayList<LayoutGroupDTO>();
+         
          //add phase groups
-         for(PhaseModelDTO phaseDTO : getPhaseModelsDTO()){
-              layoutGroupDTOs.addAll(phaseDTO.getLayoutDTO().getLayoutGroupsDTO());
+         for(PhaseModelDTO phaseDTO : getPhaseModelsDTO()){          
+         for(LayoutGroupDTO lg : phaseDTO.getLayoutDTO().getLayoutGroupsDTO()){
+                   for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
+                        FlexibleElementDTO element = lc.getFlexibleElementDTO();
+                        element.setGroup(lg);
+                        element.setConstraint(lc);
+                        element.setContainerModel(phaseDTO);
+                        
+                        ElementTypeEnum type=element.getElementType();
+                        if(ElementTypeEnum.DEFAULT.equals(type)||
+                                  ElementTypeEnum.CHECKBOX.equals(type)||
+                                  ElementTypeEnum.TEXT_AREA.equals(type)||
+                                  ElementTypeEnum.TRIPLETS.equals(type)||
+                                  ElementTypeEnum.QUESTION.equals(type)){                     
+                             allElements.add(element);
+                        } 
+                   }
+              }
                
          }
          //add details groups
+         ProjectDetailsDTO p = getProjectDetailsDTO();
+         p.setName();
+         setProjectDetailsDTO(p);
          if(getProjectDetailsDTO().getLayoutDTO()!=null){
-              layoutGroupDTOs.addAll(getProjectDetailsDTO().getLayoutDTO().getLayoutGroupsDTO());
+         for(LayoutGroupDTO lg : getProjectDetailsDTO().getLayoutDTO().getLayoutGroupsDTO()){
+                   for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
+                        FlexibleElementDTO element = lc.getFlexibleElementDTO();
+                        element.setGroup(lg);
+                        element.setConstraint(lc);
+                        element.setContainerModel(getProjectDetailsDTO());
+                        
+                        ElementTypeEnum type=element.getElementType();
+                        if(ElementTypeEnum.DEFAULT.equals(type)||
+                                  ElementTypeEnum.CHECKBOX.equals(type)||
+                                  ElementTypeEnum.TEXT_AREA.equals(type)||
+                                  ElementTypeEnum.TRIPLETS.equals(type)||
+                                  ElementTypeEnum.QUESTION.equals(type)){                     
+                             allElements.add(element);
+                        } 
+                   }
+              }
          }
-         
-         //gather elements
-         for(LayoutGroupDTO lg : layoutGroupDTOs){
-              for(LayoutConstraintDTO lc : lg.getLayoutConstraintsDTO()){
-                   FlexibleElementDTO element = lc.getFlexibleElementDTO();
-                   ElementTypeEnum type=element.getElementType();
-                   
-                   if(ElementTypeEnum.DEFAULT.equals(type)||
-                             ElementTypeEnum.CHECKBOX.equals(type)||
-                             ElementTypeEnum.TEXT_AREA.equals(type)||
-                             ElementTypeEnum.TRIPLETS.equals(type)||
-                             ElementTypeEnum.QUESTION.equals(type)){                     
-                        allElements.add(element);
-                   }
-                   
-                   
-              }
-         }
                    
          return allElements;            
     }
Index: sigmah/src/main/java/org/sigmah/client/ui/GlobalExportSettingsForm.java
===================================================================
--- sigmah/src/main/java/org/sigmah/client/ui/GlobalExportSettingsForm.java     (revision 1561)
+++ sigmah/src/main/java/org/sigmah/client/ui/GlobalExportSettingsForm.java     (working copy)
@@ -24,6 +24,8 @@
 import org.sigmah.shared.dto.UpdateGlobalExportSettings;
 import org.sigmah.shared.dto.element.DefaultFlexibleElementDTO;
 import org.sigmah.shared.dto.element.FlexibleElementDTO;
+import org.sigmah.shared.dto.layout.LayoutGroupDTO;
+
 
 import com.extjs.gxt.ui.client.Style.Orientation;
 import com.extjs.gxt.ui.client.data.BaseModelData;
@@ -135,7 +137,7 @@
          w.setModal(true);
          w.setBlinkModal(true);
          w.setLayout(new FitLayout());
-         w.setSize(600, 420);
+         w.setSize(900, 420);
          w.setHeading(I18N.CONSTANTS.globalExportConfiguration());
 
          final FormPanel panel = new FormPanel();
@@ -363,10 +365,12 @@
               public Object render(FlexibleElementDTO model, String property, ColumnData config, int rowIndex,
                               int colIndex, ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) {
                    String title = null;
-                   if (ElementTypeEnum.DEFAULT.equals(model.getElementType()))
-                        title = DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO) model).getType());
-                   else
+                   
+                   if (ElementTypeEnum.DEFAULT.equals(model.getElementType())){                         
+                        title = DefaultFlexibleElementType.getName(((DefaultFlexibleElementDTO) model).getType());                    
+                   }else{
                         title = model.getLabel();
+                   }
                    final Text text = AdminUtil.createGridText(title);
                    text.setTitle(title);
                    return text;
@@ -374,10 +378,56 @@
 
          });
          configs.add(column);
+         
+         column = new ColumnConfig("container",I18N.CONSTANTS.adminFlexibleContainer(), 120);   
+        column.setRenderer(new GridCellRenderer<FlexibleElementDTO>(){
+
+              @Override
+              public Object render(FlexibleElementDTO model, String property,
+                        ColumnData config, int rowIndex, int colIndex,
+                        ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) { 
+                   
+                   /**
+                   if (ElementTypeEnum.DEFAULT.equals(model.getElementType())){
+                        
+                        //System.out.println("Property ::: "+property);
+                        //System.out.println("Model Properties :::: "+model.getLabel());
+                        //System.out.println("Model ::: "+model);
+                        //System.out.println("Model Properties :::: "+model.getContainerModel().getProperties().toString());
+                        
+                        return AdminUtil.createGridText("DEFAULT_CASE");
+                   }else{
+                   **/
+                        BaseModelData container = model.getContainerModel();
+                        return AdminUtil.createGridText((String)container.get("name"));
+                        
+                   //}
+              
+              
+              }
+         
+        }); 
+         configs.add(column);
+         
+         column = new ColumnConfig("group",I18N.CONSTANTS.adminFlexibleGroup(), 200);   
+         column.setRenderer(new GridCellRenderer<FlexibleElementDTO>(){
+
+              @Override
+              public Object render(final FlexibleElementDTO model, String property,
+                        ColumnData config, int rowIndex, int colIndex,
+                        ListStore<FlexibleElementDTO> store, Grid<FlexibleElementDTO> grid) { 
+                        
+                        LayoutGroupDTO group = model.getGroup();
+                        return AdminUtil.createGridText((String)group.get("title"));
+              }         
+        }); 
+         configs.add(column);
+         
+         
          ColumnModel cm = new ColumnModel(configs);
          Grid<FlexibleElementDTO> grid = new Grid<FlexibleElementDTO>(fieldsStore, cm);
          grid.setStyleName("global-export-fields-table");
-         grid.setSize(250, 200);
+         grid.setSize(500, 200);
          grid.getView().setForceFit(true);
          return grid;
     }
