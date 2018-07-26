Index: /src/main/java/org/sigmah/client/event/SiteEvent.java
===================================================================
--- /src/main/java/org/sigmah/client/event/SiteEvent.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/event/SiteEvent.java	(working copy)
@@ -27,6 +27,10 @@
 	public static final EventType CREATED = new EventBus.NamedEventType("SiteCreated");
     public static final EventType UPDATED = new EventBus.NamedEventType("SiteChanged");
 	public static final EventType SELECTED = new EventBus.NamedEventType("SiteSelected");
+	public static final EventType DELETED = new EventBus.NamedEventType("SiteDeleted");
+	
+	public static final EventType MAIN_SITE_UPDATED = new EventBus.NamedEventType("MainSiteUpdated");
+	public static final EventType MAIN_SITE_CREATED = new EventBus.NamedEventType("MainSiteCreated");
 
     /**
      *
Index: /src/main/java/org/sigmah/client/i18n/UIConstants.properties
===================================================================
--- /src/main/java/org/sigmah/client/i18n/UIConstants.properties	(revision 1591)
+++ /src/main/java/org/sigmah/client/i18n/UIConstants.properties	(working copy)
@@ -65,6 +65,14 @@
 
 EDIT_ALL_REMINDERS = Edit all reminders
 
+VIEW_MAPTAB = View project map
+
+MANAGE_MAIN_SITE = Manage main site
+
+MANAGE_SITES = Manage sites
+
+EXPORT_HXL = Export HXL
+
 acronym = Acronym
 
 activities = Activities
@@ -619,8 +627,6 @@
 
 average = Average
 
-axe = Axe
-
 goToIndicatorsList = Go to indicators list
 
 backgroundMap = Background map
@@ -1259,8 +1265,6 @@
 
 locale = Language
 
-location = Location
-
 locationType = Location Type 
 
 # Log frame
@@ -2437,3 +2441,36 @@
 dayInMonth = Day in Month
 dayInWeek = Day in Week
 
+# Project > Map page
+# Name displayed on the Project tab-selector
+projectMap = Map
+# Title of the component handling sites on Project > Map
+projectSitesManagement = Sites
+# Title of the tab element displaying OpenStreet Maps
+openStreetMap = OpenStreetMap
+# Title of the tab element displaying Google Maps
+googleMaps = Google Maps
+# Title of set/edit Main Site window
+projectMainSite = Project main location (main site)
+# Label of the button opening the Main location (Site) window
+createMainSiteButton = Set project location
+editMainSiteButton = Edit project location
+# Label for map markers (on hover)
+mainSiteLabel = Main location
+# Message for the status label below the OpenStreetMap display gadget
+loadingOSM = Loading OpenStreet Map...
+# Name of the basic OSM layer for the OSMSiteMap layer-switcher tool
+basicOSMLayer = Basic OSM
+# Name of the Humanitarian OSM layer for the OSMSiteMap layer-switcher tool
+humanitarianOSMLayer = Humanitarian
+# Name of the layer displaying project site markers for the OSMSiteMap layer-switcher tool 
+projectSitesLayer = Project sites
+# Site grid column title & Site popup field label (!!! change old property in other files -> location)
+location = Site name
+# Title of the LocationFieldSet (on the new site form)
+locationTitle = Location
+# Site grid column title & New site popup field label (remove old property from other files -> axe)
+axeColumnTitle = Road
+axeFieldLabel = Road (optional)
+
+
Index: /src/main/java/org/sigmah/client/icon/IconImageBundle.java
===================================================================
--- /src/main/java/org/sigmah/client/icon/IconImageBundle.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/icon/IconImageBundle.java	(working copy)
@@ -203,4 +203,11 @@
     AbstractImagePrototype ods();
     
     AbstractImagePrototype csv();
+    
+    @Resource(value = "star.png")
+    AbstractImagePrototype mainSite();
+    
+    @Resource(value = "markerStar.png")
+    AbstractImagePrototype markerStar();
+    
 }
Index: /src/main/java/org/sigmah/client/page/common/toolbar/UIActions.java
===================================================================
--- /src/main/java/org/sigmah/client/page/common/toolbar/UIActions.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/common/toolbar/UIActions.java	(working copy)
@@ -49,6 +49,8 @@
     public static final String exportData = "exportData";
     
     public static final String deleteModel ="deleteModel";
+    
+    public static final String manageMainSite = "mainSite";
     	
     	
 }
Index: /src/main/java/org/sigmah/client/page/config/design/ProjectSiteGridPanel.java
===================================================================
--- /src/main/java/org/sigmah/client/page/config/design/ProjectSiteGridPanel.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/config/design/ProjectSiteGridPanel.java	(working copy)
@@ -2,6 +2,7 @@
 
 import org.sigmah.client.EventBus;
 import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.page.entry.SiteGridPanel;
 import org.sigmah.client.page.project.SubPresenter;
 import org.sigmah.client.util.state.IStateManager;
@@ -12,8 +13,9 @@
 public class ProjectSiteGridPanel extends SiteGridPanel implements SubPresenter {
 
     @Inject
-    public ProjectSiteGridPanel(EventBus eventBus, Dispatcher service, IStateManager stateMgr) {
-        super(eventBus, service, stateMgr);
+    public ProjectSiteGridPanel(EventBus eventBus, Dispatcher service, 
+    		Authentication authentication, IStateManager stateMgr) {
+        super(eventBus, service, authentication, stateMgr);
         setHeaderVisible(false);
 
     }
Index: /src/main/java/org/sigmah/client/page/entry/editor/AdminFieldSet.java
===================================================================
--- /src/main/java/org/sigmah/client/page/entry/editor/AdminFieldSet.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/entry/editor/AdminFieldSet.java	(working copy)
@@ -28,7 +28,7 @@
             new HashMap<Integer, ComboBox<AdminEntityDTO>>();
 
     public AdminFieldSet(List<AdminLevelDTO> adminLevels) {
-        super(I18N.CONSTANTS.location(), 100, 200);
+        super(I18N.CONSTANTS.locationTitle(), 100, 200);
 
         for(final AdminLevelDTO level : adminLevels) {
             final int levelId = level.getId();
Index: /src/main/java/org/sigmah/client/page/entry/editor/LocationFieldSet.java
===================================================================
--- /src/main/java/org/sigmah/client/page/entry/editor/LocationFieldSet.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/entry/editor/LocationFieldSet.java	(working copy)
@@ -29,7 +29,7 @@
 
         TextField<String> axeField = new TextField<String>();
         axeField.setName("locationAxe");
-        axeField.setFieldLabel(I18N.CONSTANTS.axe());
+        axeField.setFieldLabel(I18N.CONSTANTS.axeFieldLabel());
         add(axeField);
     }
 }
Index: /src/main/java/org/sigmah/client/page/entry/OSMSiteMap.java
===================================================================
--- /src/main/java/org/sigmah/client/page/entry/OSMSiteMap.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/entry/OSMSiteMap.java	(working copy)
@@ -0,0 +1,342 @@
+package org.sigmah.client.page.entry;
+
+import java.util.ArrayList;
+import java.util.HashMap;
+import java.util.Map;
+
+import org.sigmah.client.EventBus;
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.event.SiteEvent;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
+import org.sigmah.client.map.AdminBoundsHelper;
+import org.sigmah.client.page.common.Shutdownable;
+import org.sigmah.shared.command.GetSitePoints;
+import org.sigmah.shared.command.result.SitePointList;
+import org.sigmah.shared.dao.Filter;
+import org.sigmah.shared.dto.ActivityDTO;
+import org.sigmah.shared.dto.BoundingBoxDTO;
+import org.sigmah.shared.dto.CountryDTO;
+import org.sigmah.shared.dto.SiteDTO;
+import org.sigmah.shared.dto.SitePointDTO;
+
+import com.extjs.gxt.ui.client.event.Listener;
+import com.google.gwt.dom.client.Style.Unit;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.Command;
+import com.google.gwt.user.client.DeferredCommand;
+import com.google.gwt.user.client.ui.DockLayoutPanel;
+import com.google.gwt.user.client.ui.Label;
+import com.google.inject.Inject;
+
+import org.gwtopenmaps.openlayers.client.Bounds;
+import org.gwtopenmaps.openlayers.client.control.LayerSwitcher;
+import org.gwtopenmaps.openlayers.client.feature.VectorFeature;
+import org.gwtopenmaps.openlayers.client.geometry.Point;
+import org.gwtopenmaps.openlayers.client.Icon;
+import org.gwtopenmaps.openlayers.client.LonLat; 
+import org.gwtopenmaps.openlayers.client.layer.OSM;
+import org.gwtopenmaps.openlayers.client.layer.Vector;
+import org.gwtopenmaps.openlayers.client.layer.XYZ;
+import org.gwtopenmaps.openlayers.client.layer.OSMOptions;
+import org.gwtopenmaps.openlayers.client.MapOptions;
+import org.gwtopenmaps.openlayers.client.MapWidget;
+import org.gwtopenmaps.openlayers.client.Style;
+
+
+public class OSMSiteMap extends DockLayoutPanel implements Shutdownable {
+
+	private final EventBus eventBus;
+	private final Dispatcher dispatcher;
+	private Filter filter;
+
+	private MapWidget mapWidget = null;
+	private Label status;
+
+	private Map<Integer, VectorFeature> sites;
+	private SitePointList sitePoints;
+	private Listener<SiteEvent> siteListener;
+
+	private Vector vectorLayer;
+	private Bounds bounds;
+	
+	private CountryDTO country;
+	private Integer mainSiteId;
+	
+	public OSMSiteMap(EventBus eventBus, Dispatcher dispatcher) {
+		super(Unit.PX);
+		
+		this.eventBus = eventBus;
+		this.dispatcher = dispatcher;
+		
+		status = new Label();
+		status.setStyleName("project-map-Label");
+		addSouth(status, 25);
+	}
+
+	public void loadSites(ActivityDTO activity) {
+		loadSites(activity.getDatabase().getCountry(), Filter.filter()
+				.onActivity(activity.getId()));
+	}
+
+	public void loadSites(CountryDTO country, Filter filter) {
+		this.country = country;
+		this.filter = filter;
+		
+		if (mapWidget == null) {
+			loadMap();
+		} else {
+			doLoadSites();
+		}
+	}
+
+	private void loadMap() {
+		status.setText(I18N.CONSTANTS.loadingOSM());
+
+		MapOptions defaultMapOptions = new MapOptions();
+		this.mapWidget = new MapWidget("100%", "100%", defaultMapOptions);
+		
+		// HOT layer = Humanitarian OpenStreetMap
+		OSMOptions hotOption = new OSMOptions();
+		hotOption.setIsBaseLayer(true);
+		hotOption.crossOriginFix();
+		hotOption.setSphericalMercator(true);
+
+		XYZ HOTLayer = new XYZ(I18N.CONSTANTS.humanitarianOSMLayer(), "http://a.tile.openstreetmap.fr/hot/${z}/${x}/${y}.png", hotOption);
+		mapWidget.getMap().addLayer(HOTLayer);
+				
+		// Basic layer
+		OSM osmMapnik = OSM.Mapnik(I18N.CONSTANTS.basicOSMLayer());
+		osmMapnik.setIsBaseLayer(true);
+		mapWidget.getMap().addLayer(osmMapnik);
+		 
+		vectorLayer = new Vector(I18N.CONSTANTS.projectSitesLayer());
+		
+		mapWidget.getMap().addControl(new LayerSwitcher());
+
+		// Center & zoom
+		LonLat lonLat = new LonLat(0, 0);
+		lonLat.transform("EPSG:4326", mapWidget.getMap().getProjection());
+		mapWidget.getMap().setCenter(lonLat, 1);
+		mapWidget.getMap().updateSize();
+
+		add(mapWidget);
+		
+		addSiteEventListeners();
+		doLoadSites();
+	}
+
+	private void doLoadSites() {
+		status.setText(I18N.CONSTANTS.loading());
+
+		dispatcher.execute(new GetSitePoints(filter), null,
+				new AsyncCallback<SitePointList>() {
+					@Override
+					public void onFailure(Throwable throwable) {
+						status.setText(I18N.CONSTANTS.serverError());
+					}
+
+					@Override
+					public void onSuccess(SitePointList points) {
+						status.setText(I18N.MESSAGES.siteLoadStatus(Integer
+								.toString(points.getPoints().size()), Integer
+								.toString(points.getWithoutCoordinates())));
+
+						sitePoints = points;
+						addSitesToMap(points);
+					}
+				});
+	}
+
+	public void addSitesToMap(final SitePointList points) {
+		vectorLayer.removeAllFeatures();  
+	
+		sites = new HashMap<Integer, VectorFeature>();
+
+		Style siteStyle = new Style();
+		siteStyle.setExternalGraphic("http://www.google.com/mapfiles/marker.png");
+		siteStyle.setGraphicSize(20, 34);
+		siteStyle.setGraphicOffset(-10, -34); // anchor on bottom center
+		siteStyle.setFillOpacity(1.0);
+		
+		Style mainSiteStyle = new Style();
+		mainSiteStyle.setExternalGraphic("https://raw.githubusercontent.com/somzzz/Sigmah_resources/master/resources/markerStar.png");
+		mainSiteStyle.setGraphicSize(20, 34);
+		mainSiteStyle.setGraphicOffset(-10, -34); // anchor on bottom center
+		mainSiteStyle.setFillOpacity(1.0);
+
+		for (SitePointDTO point : points.getPoints()) {		
+			LonLat lonLat = new LonLat(point.getX(), point.getY());
+			lonLat.transform("EPSG:4326", mapWidget.getMap().getProjection());
+			
+			Point p = new Point(lonLat.lon(), lonLat.lat());
+			VectorFeature pointFeature;
+			
+			if (mainSiteId != null && point.getSiteId() == mainSiteId) {		
+				pointFeature = new VectorFeature(p, mainSiteStyle);
+			} else {
+				pointFeature = new VectorFeature(p, siteStyle);
+			}
+			
+			vectorLayer.addFeature(pointFeature);
+			sites.put(point.getSiteId(), pointFeature);
+		}
+
+		mapWidget.getMap().addLayer(vectorLayer);
+		
+        DeferredCommand.addCommand(new Command() {	
+			@Override
+			public void execute() {
+				refresh(points);
+			}
+        });
+	}
+	
+	public void refreshView() {
+        DeferredCommand.addCommand(new Command() {	
+			@Override
+			public void execute() {
+				refresh(sitePoints);
+			}
+        });
+	}
+	
+	private void refresh(SitePointList points) {
+		if (points.getPoints().size() == 0) {
+			LonLat lonLat = new LonLat(0, 0);
+			lonLat.transform("EPSG:4326", mapWidget.getMap().getProjection());
+
+			mapWidget.getMap().setCenter(lonLat, 1);
+		} else if (points.getPoints().size() == 1) {
+			SitePointDTO point = points.getPoints().get(0);
+
+			LonLat lonLat = new LonLat(point.getX(), point.getY());
+			lonLat.transform("EPSG:4326", mapWidget.getMap().getProjection());
+
+			mapWidget.getMap().setCenter(lonLat, 8);
+			mapWidget.getMap().updateSize();
+		} else {
+			zoomToBounds(points.getBounds());
+		}
+	}
+	
+    private void zoomToBounds(BoundingBoxDTO bbBoxBounds) {
+    	LonLat lower = new LonLat(bbBoxBounds.getX1(), bbBoxBounds.getY1());
+    	lower.transform("EPSG:4326", mapWidget.getMap().getProjection());
+    	LonLat upper = new LonLat(bbBoxBounds.getX2(), bbBoxBounds.getY2());
+    	upper.transform("EPSG:4326", mapWidget.getMap().getProjection());
+    	
+        bounds = new Bounds(lower.lon(), lower.lat(), upper.lon(), upper.lat());
+        mapWidget.getMap().setCenter(bounds.getCenterLonLat(), 
+        		mapWidget.getMap().getZoomForExtent(bounds, false));
+        
+        mapWidget.getMap().updateSize();
+       
+    }
+
+	public void setMainSite(Integer mainSiteId) {
+		this.mainSiteId = mainSiteId;
+	}
+	
+	private CountryDTO getCountry() {
+		return country;
+	}
+	
+	public void addSiteEventListeners() {
+		// Site event listeners
+		siteListener = new Listener<SiteEvent>() {
+			public void handleEvent(SiteEvent be) {
+				if (be.getType() == SiteEvent.CREATED) {
+					onSiteCreated(be.getEntity());
+				} else if (be.getType() == SiteEvent.UPDATED) {
+					onSiteUpdated(be.getEntity());
+				} else if (be.getType() == SiteEvent.DELETED) {
+					onSiteDeleted(be.getEntity());
+				} else if (be.getType() == SiteEvent.MAIN_SITE_CREATED) {
+					onMainSiteCreated(be.getEntity());
+				} else if (be.getType() == SiteEvent.MAIN_SITE_UPDATED) {
+					onMainSiteUpdated(be.getEntity());
+				}
+			}
+		};
+
+		eventBus.addListener(SiteEvent.CREATED, siteListener);
+		eventBus.addListener(SiteEvent.UPDATED, siteListener);
+		eventBus.addListener(SiteEvent.DELETED, siteListener);
+
+		eventBus.addListener(SiteEvent.MAIN_SITE_CREATED,siteListener);
+		eventBus.addListener(SiteEvent.MAIN_SITE_UPDATED,siteListener);
+		
+	}
+	
+	public void shutdown() {
+		eventBus.removeListener(SiteEvent.CREATED, siteListener);
+		eventBus.removeListener(SiteEvent.UPDATED, siteListener);
+		eventBus.removeListener(SiteEvent.DELETED, siteListener);
+
+		eventBus.removeListener(SiteEvent.MAIN_SITE_UPDATED, siteListener);
+		eventBus.removeListener(SiteEvent.MAIN_SITE_CREATED, siteListener);
+	}
+
+	private void onSiteCreated(final SiteDTO site) {
+    	doLoadSites();
+	}
+
+	private void onSiteUpdated(final SiteDTO site) {
+    	doLoadSites();
+	}
+
+	private void onSiteDeleted(final SiteDTO site) {
+    	doLoadSites();
+	}
+
+	private void onMainSiteUpdated(final SiteDTO site) {
+    	this.mainSiteId = site.getId();
+    	doLoadSites();
+	}
+
+	private void onMainSiteCreated(final SiteDTO site) {
+    	this.mainSiteId = site.getId();
+    	doLoadSites();
+	}
+
+
+	private void addSite(SiteDTO site, Style pointStyle) {
+		LonLat lonLat = new LonLat(site.getX(), site.getY());
+		lonLat.transform("EPSG:4326", mapWidget.getMap().getProjection());
+		
+		Point point = new Point(lonLat.lon(), lonLat.lat());
+		VectorFeature marker = new VectorFeature(point, pointStyle);
+		
+		sites.put(site.getId(), marker);
+		vectorLayer.addFeature(marker);
+		
+		bounds.extend(lonLat);
+		mapWidget.getMap().setCenter(bounds.getCenterLonLat(), 
+				mapWidget.getMap().getZoomForExtent(bounds, false));
+	}
+	
+	
+	private void updateSite(SiteDTO site) {
+		VectorFeature marker = sites.get(site.getId());
+		
+		LonLat lonLat = new LonLat(site.getX(), site.getY());
+		lonLat.transform("EPSG:4326", mapWidget.getMap().getProjection());
+
+		marker.move(lonLat);		
+		sites.put(site.getId(), marker);
+
+		bounds.extend(lonLat);
+		mapWidget.getMap().setCenter(bounds.getCenterLonLat(), 
+				mapWidget.getMap().getZoomForExtent(bounds, false));
+	}
+	
+	
+	private void removeSite(SiteDTO site) {
+		VectorFeature marker = sites.get(site.getId());
+		
+		vectorLayer.removeFeature(marker);
+		sites.remove(site.getId());
+	}
+}
Index: /src/main/java/org/sigmah/client/page/entry/SiteColumnModelBuilder.java
===================================================================
--- /src/main/java/org/sigmah/client/page/entry/SiteColumnModelBuilder.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/entry/SiteColumnModelBuilder.java	(working copy)
@@ -6,6 +6,7 @@
 
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
 import org.sigmah.shared.command.GetSchema;
 import org.sigmah.shared.dao.Filter;
 import org.sigmah.shared.dto.ActivityDTO;
@@ -31,7 +32,9 @@
 import com.google.gwt.i18n.client.DateTimeFormat;
 import com.google.gwt.i18n.client.NumberFormat;
 import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.gwt.user.client.ui.Image;
 
+
 /**
  * Helper class that builds the ColumnModel for the SiteGrid, based 
  * on the provided filter.
@@ -46,14 +49,16 @@
     private final AsyncCallback<ColumnModel> callback;
     private final Dispatcher dispatcher;
     private final Filter filter;
+    private final Integer mainSiteId;
     private final List<ColumnConfig> columns = new ArrayList<ColumnConfig>();
     private final Collection<IndicatorDTO> indicators;
 	
-	public SiteColumnModelBuilder(Dispatcher dispatch, Filter filter, Collection<IndicatorDTO> indicators, AsyncCallback<ColumnModel> callback) {
+	public SiteColumnModelBuilder(Dispatcher dispatch, Filter filter, Integer mainSiteId, Collection<IndicatorDTO> indicators, AsyncCallback<ColumnModel> callback) {
 		this.callback = callback;
 		this.filter = filter;
 		this.indicators = indicators;
 		this.dispatcher = dispatch;
+		this.mainSiteId = mainSiteId;
 		
         if(!filterIncludesSingleDatabase()) {
         	columns.add(createDatabaseColumn());
@@ -60,6 +65,7 @@
         }
         
         columns.add(createMappedColumn());
+        columns.add(createMainSiteColumn());
         
         if(filterIncludesSingleActivity()) {
         	addActivitySpecificColumns();
@@ -206,7 +212,36 @@
 		return new ColumnConfig("database", I18N.CONSTANTS.database(), 50);
 	}
 	
+	private ColumnConfig createMainSiteColumn() {
+       
+        final ColumnConfig mainSiteColumn = new ColumnConfig("siteType", "", 25);
+        mainSiteColumn.setRenderer(new GridCellRenderer<SiteDTO>() {
 
+            @Override
+            public Object render(SiteDTO model, String property, ColumnData config,
+            		int rowIndex, int colIndex, ListStore listStore, Grid grid) {
+            	
+            	// Main site icon
+                final Image icon;
+                                             
+                if (mainSiteId != null && mainSiteId == model.getId()) {
+                	//star
+                    icon = IconImageBundle.ICONS.mainSite().createImage();
+                    icon.setTitle("Main Site");
+                    
+                    icon.addStyleName("project-starred-icon");
+                } else {
+                	// Display no icon for simple sites
+                	icon = null;
+                }
+                
+                return icon;
+            }
+        });
+        
+        return mainSiteColumn;
+	}
+
     protected ColumnConfig createIndicatorColumn(IndicatorDTO indicator, String header) {
 
     	final NumberFormat format = IndicatorNumberFormats.forIndicator(indicator);
@@ -243,7 +278,7 @@
 	private ColumnConfig createLocation2Column() {
 		TextField<String> locationAxeField = new TextField<String>();
 
-		ColumnConfig axeColumn = new ColumnConfig("locationAxe", I18N.CONSTANTS.axe(), 75);
+		ColumnConfig axeColumn = new ColumnConfig("locationAxe", I18N.CONSTANTS.axeColumnTitle(), 75);
 		axeColumn.setEditor(new CellEditor(locationAxeField));
 		return axeColumn;
 	}
Index: /src/main/java/org/sigmah/client/page/entry/SiteGridPanel.java
===================================================================
--- /src/main/java/org/sigmah/client/page/entry/SiteGridPanel.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/entry/SiteGridPanel.java	(working copy)
@@ -12,6 +12,7 @@
 import org.sigmah.client.EventBus;
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.dispatch.remote.Authentication;
 import org.sigmah.client.event.SiteEvent;
 import org.sigmah.client.i18n.I18N;
 import org.sigmah.client.icon.IconImageBundle;
@@ -29,7 +30,9 @@
 import org.sigmah.shared.command.result.SiteResult;
 import org.sigmah.shared.command.result.VoidResult;
 import org.sigmah.shared.dao.Filter;
+import org.sigmah.shared.domain.profile.GlobalPermissionEnum;
 import org.sigmah.shared.dto.IndicatorDTO;
+import org.sigmah.shared.dto.profile.ProfileUtils;
 import org.sigmah.shared.dto.SchemaDTO;
 import org.sigmah.shared.dto.SiteDTO;
 import org.sigmah.shared.dto.UserDatabaseDTO;
@@ -51,6 +54,7 @@
 import com.extjs.gxt.ui.client.event.SelectionProvider;
 import com.extjs.gxt.ui.client.store.ListStore;
 import com.extjs.gxt.ui.client.store.Record;
+import com.extjs.gxt.ui.client.widget.button.Button;
 import com.extjs.gxt.ui.client.widget.ContentPanel;
 import com.extjs.gxt.ui.client.widget.Info;
 import com.extjs.gxt.ui.client.widget.Label;
@@ -74,6 +78,8 @@
 
     private Listener<SiteEvent> siteChangedListener;
     private Listener<SiteEvent> siteCreatedListener;
+    private Listener<SiteEvent> mainSiteUpdatedListener;
+    private Listener<SiteEvent> mainSiteCreatedListener;
     private List<Shutdownable> subComponents = new ArrayList<Shutdownable>();
 
     public static final int PAGE_SIZE = 25;
@@ -80,6 +86,7 @@
 
     protected final EventBus eventBus;
     protected final Dispatcher service;
+    protected final Authentication authentication;
 
     private PagingLoader<SiteResult> loader;
     private ListStore<SiteDTO> store;
@@ -93,9 +100,13 @@
     private Integer siteIdToSelectOnNextLoad;
 
     private boolean siteUpdated;
+    
+    private Integer mainSiteId;
 
     @Inject
-    public SiteGridPanel(EventBus eventBus, Dispatcher service, IStateManager stateMgr) {
+    public SiteGridPanel(EventBus eventBus, Dispatcher service, 
+    		Authentication authentication, IStateManager stateMgr) {
+    	this.authentication = authentication;
         this.eventBus = eventBus;
         this.service = service;
         this.siteUpdated = false;
@@ -118,6 +129,7 @@
                 }
             }
         });
+        
         eventBus.addListener(SiteEvent.UPDATED, new Listener<SiteEvent>() {
 
             @Override
@@ -127,6 +139,36 @@
                 }
             }
         });
+        
+        eventBus.addListener(SiteEvent.DELETED, new Listener<SiteEvent>() {
+
+            @Override
+            public void handleEvent(SiteEvent be) {
+                if (be.getEntityName().equals("Site")) {
+                    onSiteDeleted(be);
+                }
+            }
+        });
+        
+        eventBus.addListener(SiteEvent.MAIN_SITE_CREATED, new Listener<SiteEvent>() {
+
+            @Override
+            public void handleEvent(SiteEvent be) {
+                if (be.getEntityName().equals("Site")) {
+                    onMainSiteCreated(be);
+                }
+            }
+        });
+        
+        eventBus.addListener(SiteEvent.MAIN_SITE_UPDATED, new Listener<SiteEvent>() {
+
+            @Override
+            public void handleEvent(SiteEvent be) {
+                if (be.getEntityName().equals("Site")) {
+                    onMainSiteUpdated(be);
+                }
+            }
+        });
     }
 
     /*
@@ -161,9 +203,6 @@
 
             @Override
             public void loaderBeforeLoad(LoadEvent le) {
-                // toolBar.setActionEnabled(UIActions.add, currentActivity.getDatabase().isEditAllowed());
-                toolBar.setActionEnabled(UIActions.edit, false);
-                toolBar.setActionEnabled(UIActions.delete, false);
                 if (grid != null) {
                     grid.mask();
                 }
@@ -204,7 +243,38 @@
     public void load(Filter filter) {
         load(filter, Collections.<IndicatorDTO> emptySet());
     }
+    
+    
+    /**
+     * Loads the sites using the given filter and with the given mainSite. 
+     * This must be called by the container.
+     * 
+     * @param filter
+     */
+    public void load(Filter filter, Integer mainSiteId) {
+    	this.mainSiteId = mainSiteId;
+    	     
+		if (ProfileUtils.isGranted(this.authentication, GlobalPermissionEnum.MANAGE_MAIN_SITE)) {
+			toolBar.setActionEnabled(UIActions.manageMainSite, true);
+		}
+			
+		if (canManageSites()) {
+			toolBar.setActionEnabled(UIActions.add, true);
+		}
+		
+    	// By default the label is "Create". If the project has a main site, use
+    	// the "Edit" label for this button.
+    	if (mainSiteId != null) {
+    		((Button) toolBar.getItemByItemId(UIActions.manageMainSite)).setText(I18N.CONSTANTS.editMainSiteButton());
+    	} else {
+    		// Disable creating sites until a main site is created.
+    		toolBar.setActionEnabled(UIActions.add, false);
+    	}
+    	
+        load(filter, Collections.<IndicatorDTO> emptySet());
+    }
 
+    
     /**
      * Loads the sites using the given filter, and including columns for the supplied indicators. This must be called by
      * the container.
@@ -218,8 +288,9 @@
         this.siteIdToSelectOnNextLoad = 0;
         loader.setOffset(0);
         loader.load();
-        new SiteColumnModelBuilder(service, filter, indicators, new AsyncCallback<ColumnModel>() {
 
+        new SiteColumnModelBuilder(service, filter,  this.mainSiteId, indicators, new AsyncCallback<ColumnModel>() {
+
             @Override
             public void onSuccess(ColumnModel result) {
                 initGrid(result);
@@ -231,6 +302,7 @@
             }
         });
     }
+   
 
     /**
      * Gets this grid's ActionToolBar. Consumers of this widget can add additional buttons.
@@ -249,15 +321,27 @@
     private void initToolBar() {
         toolBar = new ActionToolBar();
         toolBar.setListener(this);
+
         toolBar.addSaveSplitButton();
         toolBar.add(new SeparatorToolItem());
-
+        
+        toolBar.addButton(UIActions.manageMainSite, 
+        		I18N.CONSTANTS.createMainSiteButton(), IconImageBundle.ICONS.mainSite());
+        toolBar.add(new SeparatorToolItem());
+        
         toolBar.addButton(UIActions.add, I18N.CONSTANTS.newSite(), IconImageBundle.ICONS.add());
         toolBar.addEditButton();
         toolBar.addDeleteButton(I18N.CONSTANTS.deleteSite());
 
         toolBar.add(new SeparatorToolItem());
+        
+        
+    	toolBar.setActionEnabled(UIActions.manageMainSite, false);
+        toolBar.setActionEnabled(UIActions.add, false);
+    	toolBar.setActionEnabled(UIActions.edit, false);
+    	toolBar.setActionEnabled(UIActions.delete, false);
 
+
         // toolBar.addExcelExportButton();
 
         setTopComponent(toolBar);
@@ -285,7 +369,8 @@
     }
 
     public void addActionListener(Listener<ComponentEvent> listener) {
-        toolBar.addListener(Events.Select, listener);
+    	toolBar.addListener(Events.Select, listener);
+
     }
 
     @Override
@@ -302,7 +387,6 @@
      * @param model
      */
     private void initGrid(ColumnModel model) {
-
         if (grid == null) {
             grid = new EditorGrid<SiteDTO>(store, model);
             grid.setClicksToEdit(ClicksToEdit.TWO);
@@ -312,6 +396,7 @@
                 public void handleEvent(GridEvent<SiteDTO> event) {
                     siteUpdated = true;
                     toolBar.setDirty(true);
+
                 }
             });
 
@@ -341,11 +426,17 @@
             save();
         } else if (UIActions.delete.equals(actionId)) {
             delete();
+        } else if(UIActions.manageMainSite.equals(actionId)) {
+        	autoSelectMainSite();
         }
     }
 
     private void save() {
-        toolBar.setSaving();
+    	
+    	// Save can only be clicked from the toolbar. ToolBar does not exist
+    	// => this point cannot be reached.
+    	toolBar.setSaving();
+
         // defensive copy, this may change while we're saving
         final List<Record> dirty = new ArrayList<Record>(store.getModifiedRecords());
         service.execute(SavingHelper.createUpdateCommand(store), null, new AsyncCallback<BatchResult>() {
@@ -353,8 +444,9 @@
             @Override
             public void onFailure(Throwable caught) {
                 Info.display(I18N.CONSTANTS.serverError(), I18N.CONSTANTS.saveError());
-                siteUpdated = true;
+                siteUpdated = true;    
                 toolBar.setDirty(true);
+
             }
 
             @Override
@@ -361,6 +453,7 @@
             public void onSuccess(BatchResult result) {
                 siteUpdated = false;
                 toolBar.setDirty(false);
+                
                 for (Record record : dirty) {
                     record.commit(false);
                 }
@@ -390,6 +483,7 @@
                                 @Override
                                 public void onSuccess(VoidResult result) {
                                     store.remove(site);
+                                    eventBus.fireEvent(new SiteEvent(SiteEvent.DELETED, SiteGridPanel.this, site));
                                 }
                             });
                     }
@@ -396,6 +490,15 @@
                 }
             });
     }
+    
+    private void autoSelectMainSite() {
+    	if (this.mainSiteId != null) {
+    		SiteDTO model = store.findModel("id", this.mainSiteId);
+            if (model != null) {
+                grid.getSelectionModel().setSelection(Collections.singletonList(model));
+            }
+    	}
+    }
 
     private void onSiteCreated(SiteEvent se) {
         if (store.getCount() < PAGE_SIZE) {
@@ -417,12 +520,46 @@
             store.update(site);
         }
     }
+    
+    private void onSiteDeleted(SiteEvent se) {
+        SiteDTO site = store.findModel("id", se.getSiteId());
+        if (site != null) {
+        	store.remove(site);
+        }
+    }
 
+    private void onMainSiteCreated(SiteEvent se) {
+    	this.mainSiteId = se.getEntity().getId();
+    	
+    	// reload the grid 
+    	load(filter, mainSiteId);
+    	
+    	// By default the label is "Create". If the user creates a main site, use
+    	// the "Edit" label for this button.
+    	if (mainSiteId != null) {
+    		((Button) toolBar.getItemByItemId(UIActions.manageMainSite)).setText(I18N.CONSTANTS.editMainSiteButton());
+			if (canManageSites()) {
+				toolBar.setActionEnabled(UIActions.add, true);
+			}
+    	} 
+    	
+        onSiteCreated(se);
+    }
+
+    private void onMainSiteUpdated(SiteEvent se) {
+    	this.mainSiteId = se.getEntity().getId();
+    	onSiteUpdated(se);
+    }
+    
     public void shutdown() {
 
         eventBus.removeListener(SiteEvent.UPDATED, siteChangedListener);
         eventBus.removeListener(SiteEvent.CREATED, siteCreatedListener);
+        eventBus.removeListener(SiteEvent.DELETED, siteCreatedListener);
 
+        eventBus.removeListener(SiteEvent.MAIN_SITE_CREATED, mainSiteCreatedListener);
+        eventBus.removeListener(SiteEvent.MAIN_SITE_UPDATED, mainSiteUpdatedListener);
+        
         for (Shutdownable subComponet : subComponents) {
             subComponet.shutdown();
         }
@@ -430,8 +567,11 @@
 
     protected void onLoaded(LoadEvent le) {
         PagingResult result = (PagingResult) le.getData();
+        
+
         toolBar.setActionEnabled(UIActions.export, result.getTotalLength() != 0);
 
+        
         if (siteIdToSelectOnNextLoad != null) {
             SiteDTO model = store.findModel("id", siteIdToSelectOnNextLoad);
             if (model != null) {
@@ -443,25 +583,41 @@
 
     public void onSelectionChanged(SelectionChangedEvent<SiteDTO> event) {
 
-        toolBar.setActionEnabled(UIActions.delete, false);
-        toolBar.setActionEnabled(UIActions.edit, false);
+		// Enable toolbar buttons for selection
+		toolBar.setActionEnabled(UIActions.delete, false);
+		toolBar.setActionEnabled(UIActions.edit, false);
 
-        if (!event.getSelection().isEmpty()) {
-            isEditable(event.getSelectedItem(), new AsyncCallback<Boolean>() {
+    	
+		if (!event.getSelection().isEmpty()) {
 
-                @Override
-                public void onFailure(Throwable caught) {
-                }
+			// Disable the toolbar for the main site
+			// It should be handled only through the Set main site button
+			// from project > map
 
-                @Override
-                public void onSuccess(Boolean editable) {
-                    toolBar.setActionEnabled(UIActions.delete, editable);
-                    toolBar.setActionEnabled(UIActions.edit, editable);
-                }
-            });
-        }
+			if (this.mainSiteId == null
+					|| this.mainSiteId != event.getSelectedItem().getId()) {
 
-        fireEvent(Events.SelectionChange, event);
+				// Not the main site, check editable
+				isEditable(event.getSelectedItem(),
+						new AsyncCallback<Boolean>() {
+
+							@Override
+							public void onFailure(Throwable caught) {
+							}
+
+							@Override
+							public void onSuccess(Boolean editable) {
+								if (canManageSites()) {
+									toolBar.setActionEnabled(UIActions.delete, editable);
+									toolBar.setActionEnabled(UIActions.edit, editable);
+								}
+							}
+						});
+			}
+
+		}
+
+		fireEvent(Events.SelectionChange, event);
     }
 
     private void isEditable(final SiteDTO selectedSite, final AsyncCallback<Boolean> callback) {
@@ -504,4 +660,8 @@
             service.execute(cmd, null, callback);
         }
     }
+    
+    private boolean canManageSites() {
+    	return (ProfileUtils.isGranted(this.authentication, GlobalPermissionEnum.MANAGE_SITES));
+    }
 }
Index: /src/main/java/org/sigmah/client/page/entry/SiteMap.java
===================================================================
--- /src/main/java/org/sigmah/client/page/entry/SiteMap.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/entry/SiteMap.java	(working copy)
@@ -58,6 +58,8 @@
 import com.google.gwt.maps.client.geom.LatLng;
 import com.google.gwt.maps.client.geom.LatLngBounds;
 import com.google.gwt.maps.client.geom.Point;
+import com.google.gwt.maps.client.geom.Size;
+import com.google.gwt.maps.client.overlay.Icon; 
 import com.google.gwt.maps.client.overlay.Marker;
 import com.google.gwt.maps.client.overlay.MarkerOptions;
 import com.google.gwt.maps.client.overlay.Overlay;
@@ -96,6 +98,7 @@
      * Maps siteIds to markers
      */
     private Map<Integer, Marker> sites;
+	private SitePointList sitePoints;
 
     private Listener<SiteEvent> siteListener; 
 
@@ -105,9 +108,16 @@
     private Menu contextMenu;
     
     private CountryDTO country;
+    private Integer mainSiteId;
 
     private Status status;
     
+    /* Options for markers to be displayed on the map */
+    private Icon siteIcon;
+    private Icon mainSiteIcon;
+	private MarkerOptions siteOptions;
+	private MarkerOptions mainSiteOptions;
+    
     @Inject
     public SiteMap(EventBus eventBus, Dispatcher service) {
         this.eventBus = eventBus;
@@ -126,7 +136,7 @@
     			activity.getDatabase().getCountry(),
     			Filter.filter().onActivity(activity.getId()));
     }
-    
+
     /**
      * Loads the sites for the given Activity
      * 
@@ -142,53 +152,9 @@
     	}
     }
 
-    private void onSiteChanged(SiteDTO site) {
-
-    }
-
-    private void onSiteCreated(SiteDTO site) {
-
-    }
-
-    private void onSiteSelected(SiteEvent se) {
-        if (se.getSource() != this) {
-            if (se.getEntity() != null && !se.getEntity().hasCoords()) {
-                BoundingBoxDTO bounds = AdminBoundsHelper.calculate(country, se.getEntity());
-                LatLngBounds llBounds = llBoundsForBounds(bounds);
-
-                if (!llBounds.containsBounds(map.getBounds())) {
-                    zoomToBounds(llBounds);
-                }
-            } else {
-                highlightSite(se.getSiteId(), true);
-            }
-        }
-    }
-    
-    private CountryDTO getCountry() {
-    	return country;
-    }
-
-
-    public void shutdown() {
-        eventBus.removeListener(SiteEvent.SELECTED, siteListener);
-        eventBus.removeListener(SiteEvent.CREATED, siteListener);
-        eventBus.removeListener(SiteEvent.UPDATED, siteListener);
-    }
-
-    public void onSiteDropped(Record record, double lat, double lng) {
-        record.set("x", lng);
-        record.set("y", lat);
-        updateSiteCoords(((SiteDTO) record.getModel()).getId(), lat, lng);
-
-    }
-
-    public BoundingBoxDTO getSiteBounds(SiteDTO site) {
-        return AdminBoundsHelper.calculate(getCountry(), site);
-    }
-
 	private void loadMap() {
 		status.setBusy(I18N.CONSTANTS.loadingGoogleMaps());
+
 		MapApiLoader.load(new MaskingAsyncMonitor(this, I18N.CONSTANTS.loadingComponent()), new AsyncCallback<Void>() {
 
             @Override
@@ -202,7 +168,7 @@
             @Override
             public void onSuccess(Void result) {
                 removeAll();
-
+               
                 BoundingBoxDTO countryBounds = country.getBounds();
                 LatLng boundsFromActivity = LatLng.newInstance(countryBounds.getCenterY(), countryBounds.getCenterX());
 				map = new MapWidget(boundsFromActivity, 8);
@@ -213,8 +179,9 @@
                 map.addControl(new SmallMapControl());
 
                 setLayout(new FitLayout());
+                
                 add(map);
-
+                
                 map.addMapClickHandler(new MapClickHandler() {
                     @Override
                     public void onClick(MapClickEvent event) {
@@ -224,6 +191,7 @@
                         }
                     }
                 });
+                
                 map.addMapRightClickHandler(new MapRightClickHandler() {
                     public void onRightClick(MapRightClickEvent event) {
                         if (event.getOverlay() != null) {
@@ -249,19 +217,22 @@
 
                 addListener(Events.AfterLayout, resizeListener);
                 addListener(Events.Resize, resizeListener);
-
+            	addSiteEventListeners();
+                
                 new MapDropTarget(SiteMap.this);
 
-                layout();
-                
+            	setMarkerConfigurations();
+            	
+            	layout();
+            	
                 doLoadSites();
             }
         });
 	}
 
-
 	private void doLoadSites() {
 		status.setBusy(I18N.CONSTANTS.loading());
+		
 		service.execute(new GetSitePoints(filter), null, new AsyncCallback<SitePointList>() {
             @Override
             public void onFailure(Throwable throwable) {
@@ -274,58 +245,13 @@
             			Integer.toString(points.getPoints().size()), 
             			Integer.toString(points.getWithoutCoordinates())));
         	
-            	addSitesToMap(points);
-
-                siteListener = new Listener<SiteEvent>() {
-                    public void handleEvent(SiteEvent be) {
-                        if (be.getType() == SiteEvent.SELECTED) {
-                            onSiteSelected(be);
-                        } else if (be.getType() == SiteEvent.CREATED) {
-                            onSiteCreated(be.getEntity());
-                        } else if (be.getType() == SiteEvent.UPDATED) {
-                            onSiteChanged(be.getEntity());
-                        }
-                    }
-                };
-
-                eventBus.addListener(SiteEvent.SELECTED, siteListener);
-                eventBus.addListener(SiteEvent.CREATED, siteListener);
-                eventBus.addListener(SiteEvent.UPDATED, siteListener);
+             	sitePoints = points;
+             	addSitesToMap(points);
             }
         });
 	}
-
-
-
-    private int siteIdFromOverlay(Overlay overlay) {
-        if (overlay == highlitMarker) {
-            return markerIds.get(currentHighlightedMarker);
-        } else {
-            return markerIds.get(overlay);
-        }
-    }
-
-    /**
-     * Attempts to pan to the center of the bounds and
-     * zoom to the necessary zoom level. If the map widget is not
-     * rendered or is in a funk because of resizing, the zoom
-     * is deferred until a Resize or AfterLayout event is received.
-     *
-     * @param bounds
-     */
-    private void zoomToBounds(LatLngBounds bounds) {
-
-        int zoomLevel = map.getBoundsZoomLevel(bounds);
-        if (zoomLevel == 0) {
-            pendingZoom = bounds;
-        } else {
-            map.setCenter(bounds.getCenter(), zoomLevel);
-            pendingZoom = null;
-        }
-    }
-
-    public void addSitesToMap(final SitePointList points) {
-
+	
+	public void addSitesToMap(final SitePointList points) {
         if (markerMgr == null) {
             OverlayManagerOptions options = new OverlayManagerOptions();
             options.setMaxZoom(map.getCurrentMapType().getMaximumResolution());
@@ -336,17 +262,26 @@
                 markerMgr.removeMarker(marker);
             }
         }
+        
         markerIds = new HashMap<Marker, Integer>();
         sites = new HashMap<Integer, Marker>();
 
         List<Marker> markers = new ArrayList<Marker>(points.getPoints().size());
-
+        
         for (SitePointDTO point : points.getPoints()) {
-
-            Marker marker = new Marker(LatLng.newInstance(point.getY(), point.getX()));
-            markerIds.put(marker, point.getSiteId());
-            sites.put(point.getSiteId(), marker);
-            markers.add(marker);
+            if (mainSiteId != null && point.getSiteId() == mainSiteId) {
+                final Marker marker = new Marker(LatLng.newInstance(point.getY(), 
+                		point.getX()), mainSiteOptions);   
+                
+                markerIds.put(marker, point.getSiteId());
+                sites.put(point.getSiteId(), marker);
+                markers.add(marker);
+            } else {
+				final Marker marker = new Marker(LatLng.newInstance(point.getY(), point.getX()));
+				markerIds.put(marker, point.getSiteId());
+				sites.put(point.getSiteId(), marker);
+				markers.add(marker);
+            }
         }
 
         markerMgr.addOverlays(markers, 0);
@@ -354,26 +289,173 @@
 			
 			@Override
 			public void execute() {
-				markerMgr.refresh();
-				
-				if(points.getPoints().size() == 1) {
-					SitePointDTO p = points.getPoints().get(0);
-					map.setCenter(LatLng.newInstance(p.getY(), p.getX()));
-				} else {
-					zoomToBounds(llBoundsForBounds(points.getBounds()));
-				}
+				refresh(points);
 			}
 		});
+    }
+	
+    public void  refreshView() {
+    	refresh(sitePoints);
+    }
+    
+	private void refresh(SitePointList points) {
+		markerMgr.refresh();
 
+		if (points.getPoints().size() == 0) {
+			map.setCenter(LatLng.newInstance(0, 0), 1);
+		} else if (points.getPoints().size() == 1) {
+			SitePointDTO p = points.getPoints().get(0);
+			map.setCenter(LatLng.newInstance(p.getY(), p.getX()));
+			zoomToBounds(llBoundsForBounds(points.getBounds()));
+		} else {
+			zoomToBounds(llBoundsForBounds(points.getBounds()));
+		}
+
+		if (pendingZoom != null) {
+			zoomToBounds(pendingZoom);
+		}
+	}
+
+    /**
+     * Attempts to pan to the center of the bounds and
+     * zoom to the necessary zoom level. If the map widget is not
+     * rendered or is in a funk because of resizing, the zoom
+     * is deferred until a Resize or AfterLayout event is received.
+     *
+     * @param bounds
+     */
+	private void zoomToBounds(LatLngBounds bounds) {
+
+		int zoomLevel = map.getBoundsZoomLevel(bounds);
+		if (zoomLevel == 0) {
+			pendingZoom = bounds;
+		} else {
+			map.setCenter(bounds.getCenter(), zoomLevel);
+			pendingZoom = null;
+		}
+	}
+
+	private LatLngBounds llBoundsForBounds(BoundingBoxDTO bounds) {
+		LatLngBounds llbounds = LatLngBounds.newInstance(
+				LatLng.newInstance(bounds.getY2(), bounds.getX1()),
+				LatLng.newInstance(bounds.getY1(), bounds.getX2()));
+		return llbounds;
+	}
+
+	public BoundingBoxDTO getSiteBounds(SiteDTO site) {
+		return AdminBoundsHelper.calculate(getCountry(), site);
+	}
+
+	private CountryDTO getCountry() {
+		return country;
+	}
+
+	public void setMainSite(Integer mainSiteId) {
+		this.mainSiteId = mainSiteId;
+	}
+
+	public void onSiteDropped(Record record, double lat, double lng) {
+		record.set("x", lng);
+		record.set("y", lat);
+		updateSiteCoords(((SiteDTO) record.getModel()).getId(), lat, lng);
+	}
+
+	public void addSiteEventListeners() {
+		// Site event listeners
+		siteListener = new Listener<SiteEvent>() {
+			public void handleEvent(SiteEvent be) {
+				if (be.getType() == SiteEvent.CREATED) {
+					onSiteCreated(be.getEntity());
+				} else if (be.getType() == SiteEvent.UPDATED) {
+					onSiteUpdated(be.getEntity());
+				} else if (be.getType() == SiteEvent.DELETED) {
+					onSiteDeleted(be.getEntity());
+				} else if (be.getType() == SiteEvent.MAIN_SITE_CREATED) {
+					onMainSiteCreated(be.getEntity());
+				} else if (be.getType() == SiteEvent.MAIN_SITE_UPDATED) {
+					onMainSiteUpdated(be.getEntity());
+				}
+			}
+		};
+
+		eventBus.addListener(SiteEvent.CREATED, siteListener);
+		eventBus.addListener(SiteEvent.UPDATED, siteListener);
+		eventBus.addListener(SiteEvent.DELETED, siteListener);
+
+		eventBus.addListener(SiteEvent.MAIN_SITE_CREATED,siteListener);
+		eventBus.addListener(SiteEvent.MAIN_SITE_UPDATED,siteListener);	
+	}
+
+    private void onSiteUpdated(final SiteDTO site) {
+    	doLoadSites();
     }
 
-    private LatLngBounds llBoundsForBounds(BoundingBoxDTO bounds) {
-        LatLngBounds llbounds = LatLngBounds.newInstance(
-                LatLng.newInstance(bounds.getY2(), bounds.getX1()),
-                LatLng.newInstance(bounds.getY1(), bounds.getX2()));
-        return llbounds;
+    private void onSiteCreated(final SiteDTO site) {
+    	doLoadSites();
     }
+    
+    private void onSiteDeleted(final SiteDTO site) {
+    	doLoadSites();
+    }
+    
+    private void onMainSiteUpdated(final SiteDTO site) {
+    	this.mainSiteId = site.getId();
+    	doLoadSites();
+    }
 
+    private void onMainSiteCreated(final SiteDTO site) {
+    	this.mainSiteId = site.getId();
+    	doLoadSites();
+    }
+    
+
+    private void onSiteSelected(SiteEvent se) {
+        if (se.getSource() != this) {
+            if (se.getEntity() != null && !se.getEntity().hasCoords()) {
+                BoundingBoxDTO bounds = AdminBoundsHelper.calculate(country, se.getEntity());
+                LatLngBounds llBounds = llBoundsForBounds(bounds);
+
+                if (!llBounds.containsBounds(map.getBounds())) {
+                    zoomToBounds(llBounds);
+                }
+            } else {
+                highlightSite(se.getSiteId(), true);
+            }
+        }
+    }
+
+    public void shutdown() {
+        eventBus.removeListener(SiteEvent.SELECTED, siteListener);
+        eventBus.removeListener(SiteEvent.CREATED, siteListener);
+        eventBus.removeListener(SiteEvent.UPDATED, siteListener);
+        eventBus.removeListener(SiteEvent.DELETED, siteListener);
+        
+        eventBus.removeListener(SiteEvent.MAIN_SITE_UPDATED, siteListener);
+        eventBus.removeListener(SiteEvent.MAIN_SITE_CREATED, siteListener);
+    }
+
+	
+	private void setMarkerConfigurations() {
+		mainSiteIcon = Icon
+				.newInstance("https://raw.githubusercontent.com/somzzz/Sigmah_resources/master/resources/markerStar.png");
+		mainSiteIcon.setIconSize(Size.newInstance(20, 34));
+		mainSiteIcon.setIconAnchor(Point.newInstance((mainSiteIcon
+				.getIconSize().getWidth() / 2), mainSiteIcon.getIconSize()
+				.getHeight())); // lower middle point
+		mainSiteOptions = MarkerOptions.newInstance();
+		mainSiteOptions.setIcon(mainSiteIcon);
+		mainSiteOptions.setTitle(I18N.CONSTANTS.mainSiteLabel());
+	}
+
+    private int siteIdFromOverlay(Overlay overlay) {
+        if (overlay == highlitMarker) {
+            return markerIds.get(currentHighlightedMarker);
+        } else {
+            return markerIds.get(overlay);
+        }
+    }
+
+
     public void updateSiteCoords(int siteId, double lat, double lng) {
         Marker marker = sites.get(siteId);
         if (marker != null) {
Index: /src/main/java/org/sigmah/client/page/project/design/ProjectIndicatorsContainer.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/design/ProjectIndicatorsContainer.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/project/design/ProjectIndicatorsContainer.java	(working copy)
@@ -3,17 +3,11 @@
 import org.sigmah.client.EventBus;
 import org.sigmah.client.dispatch.Dispatcher;
 import org.sigmah.client.i18n.I18N;
-import org.sigmah.client.page.common.toolbar.UIActions;
 import org.sigmah.client.page.config.design.DesignPanel;
-import org.sigmah.client.page.config.design.ProjectSiteGridPanel;
-import org.sigmah.client.page.entry.SiteMap;
-import org.sigmah.client.page.entry.editor.SiteForm;
-import org.sigmah.client.page.entry.editor.SiteFormDialog;
 import org.sigmah.client.page.project.ProjectSubPresenter;
 import org.sigmah.shared.dao.Filter;
 import org.sigmah.shared.dto.IndicatorDTO;
 import org.sigmah.shared.dto.ProjectDTO;
-import org.sigmah.shared.dto.SiteDTO;
 import org.sigmah.shared.report.model.DimensionType;
 
 import com.extjs.gxt.ui.client.Style;
@@ -22,8 +16,6 @@
 import com.extjs.gxt.ui.client.util.Margins;
 import com.extjs.gxt.ui.client.widget.Component;
 import com.extjs.gxt.ui.client.widget.LayoutContainer;
-import com.extjs.gxt.ui.client.widget.TabItem;
-import com.extjs.gxt.ui.client.widget.TabPanel;
 import com.extjs.gxt.ui.client.widget.layout.BorderLayout;
 import com.extjs.gxt.ui.client.widget.layout.BorderLayoutData;
 import com.extjs.gxt.ui.client.widget.layout.FitLayout;
@@ -37,21 +29,11 @@
 	private final Dispatcher service;
 	private final EventBus eventBus;
 
-	private TabPanel tabPanel;
-	private TabItem mapTabItem;
-	private TabItem sitesTabItem;
-
-	private ProjectSiteGridPanel siteEditor;
-	private SiteMap siteMap;
-
 	private ProjectDTO project;
 
 	@Inject
-	public ProjectIndicatorsContainer(ProjectSiteGridPanel siteEditor, SiteMap siteMap, final DesignPanel designPanel,
-	                Dispatcher service, EventBus eventBus) {
+	public ProjectIndicatorsContainer(final DesignPanel designPanel, Dispatcher service, EventBus eventBus) {
 
-		this.siteEditor = siteEditor;
-		this.siteMap = siteMap;
 		this.designPanel = designPanel;
 		this.designPanel.setHeaderVisible(false);
 
@@ -62,40 +44,11 @@
 		borderLayout.setContainerStyle("x-border-layout-ct main-background");
 		setLayout(borderLayout);
 
-		// setIcon(IconImageBundle.ICONS.design());
-		// map tab panel
-		tabPanel = new TabPanel();
-		tabPanel.setPlain(true);
-
-		// map tab item
-		mapTabItem = new TabItem(I18N.CONSTANTS.map());
-		mapTabItem.setLayout(new FitLayout());
-		mapTabItem.setEnabled(false);
-		mapTabItem.setAutoHeight(true);
-		mapTabItem.setEnabled(true);
-		mapTabItem.add(siteMap);
-		tabPanel.add(mapTabItem);
-
-		// sites tab item
-		sitesTabItem = new TabItem(I18N.CONSTANTS.sites());
-		sitesTabItem.setLayout(new FitLayout());
-		sitesTabItem.setEnabled(false);
-		sitesTabItem.setAutoHeight(true);
-		sitesTabItem.setEnabled(true);
-		sitesTabItem.add(siteEditor);
-		tabPanel.add(sitesTabItem);
-
 		BorderLayoutData centerLayout = new BorderLayoutData(Style.LayoutRegion.CENTER);
 		centerLayout.setMargins(new Margins(0, 0, 0, 0));
 		centerLayout.setSplit(true);
 		centerLayout.setCollapsible(true);
 
-		BorderLayoutData layout = new BorderLayoutData(Style.LayoutRegion.EAST);
-		layout.setSplit(true);
-		layout.setCollapsible(true);
-		layout.setSize(375);
-		layout.setMargins(new Margins(0, 0, 0, 5));
-
 		add(designPanel, centerLayout);
 		designPanel.getMappedIndicator().addValueChangeHandler(new ValueChangeHandler<IndicatorDTO>() {
 
@@ -104,20 +57,6 @@
 				onMappedIndicatorChanged(event.getValue());
 			}
 		});
-
-		add(tabPanel, layout);
-
-		siteEditor.addActionListener(new Listener<ComponentEvent>() {
-
-			@Override
-			public void handleEvent(ComponentEvent be) {
-				if (UIActions.add.equals(be.getComponent().getItemId())) {
-					addSite();
-				} else if (UIActions.edit.equals(be.getComponent().getItemId())) {
-					editSite();
-				}
-			}
-		});
 	}
 
 	@Override
@@ -126,11 +65,6 @@
 
 		// load design panel
 		designPanel.load(project.getId());
-
-		// load site grid
-		Filter siteFilter = new Filter();
-		siteFilter.addRestriction(DimensionType.Database, project.getId());
-		siteEditor.load(siteFilter);
 	}
 
 	private void onMappedIndicatorChanged(IndicatorDTO value) {
@@ -137,34 +71,8 @@
 		Filter filter = new Filter();
 		filter.addRestriction(DimensionType.Indicator, value.getId());
 		filter.addRestriction(DimensionType.Database, project.getId());
-
-		siteMap.loadSites(project.getCountry(), filter);
 	}
 
-	private void addSite() {
-
-		final int projectId = project.getId();
-
-		SiteDTO site = new SiteDTO();
-		site.setDatabaseId(projectId);
-		// site.setPartner(projectPresenter.getCurrentProjectDTO().getOrgUnitId());
-
-		final SiteForm form = new SiteForm(service, project.getCountry());
-
-		final SiteFormDialog dialog = new SiteFormDialog(eventBus, service, form);
-		dialog.create(site);
-	}
-
-	private void editSite() {
-		if (!siteEditor.getSelection().isEmpty()) {
-			SiteDTO site = siteEditor.getSelection().get(0);
-			final SiteForm form = new SiteForm(service, project.getCountry());
-
-			final SiteFormDialog dialog = new SiteFormDialog(eventBus, service, form);
-			dialog.edit(site);
-		}
-	}
-
 	@Override
 	public Component getView() {
 		return (Component) this;
@@ -180,12 +88,11 @@
 
 	@Override
 	public boolean hasValueChanged() {
-		return (siteEditor.hasValueChanged() || designPanel.isIndicatorUpdated());
+		return (designPanel.isIndicatorUpdated());
 	}
 
 	@Override
 	public void forgetAllChangedValues() {
-		siteEditor.setSiteUpdated(false);
 		designPanel.setIndicatorUpdated(false);
 	}
 
Index: /src/main/java/org/sigmah/client/page/project/map/MapDisplayPresenter.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/map/MapDisplayPresenter.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/project/map/MapDisplayPresenter.java	(working copy)
@@ -0,0 +1,132 @@
+package org.sigmah.client.page.project.map;
+
+import java.util.ArrayList;
+
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.EventBus;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.entry.OSMSiteMap;
+import org.sigmah.client.page.entry.SiteMap;
+import org.sigmah.client.page.project.ProjectSubPresenter;
+import org.sigmah.shared.command.GetSites;
+import org.sigmah.shared.command.result.SiteResult;
+import org.sigmah.shared.dao.Filter;
+import org.sigmah.shared.dto.ProjectDTO;
+import org.sigmah.shared.dto.SiteDTO;
+import org.sigmah.shared.report.model.DimensionType;
+
+import com.extjs.gxt.ui.client.event.ComponentEvent;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.widget.Component;
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.TabItem;
+import com.extjs.gxt.ui.client.widget.TabPanel;
+import com.extjs.gxt.ui.client.widget.layout.FitLayout;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.inject.ImplementedBy;
+import com.google.inject.Inject;
+
+
+public class MapDisplayPresenter implements ProjectSubPresenter {
+	
+	/* View managed by this presenter */ 
+	@ImplementedBy(MapDisplayView.class)
+	public static abstract class View extends ContentPanel {
+		 public abstract ContentPanel getContentPanel();
+		 
+		 public abstract TabPanel getTabPanel();
+	}
+	
+	private View view;
+	private final Dispatcher dispatcher;
+	private final EventBus eventBus;
+	
+	private ProjectDTO project;
+	private Integer mainSiteId;
+	
+	private SiteMap googleSiteMap;
+	private OSMSiteMap osmSiteMap;
+	
+	@Inject
+	public MapDisplayPresenter(EventBus eventBus, Dispatcher dispatcher,
+			final View view, SiteMap siteMap) {
+		this.eventBus = eventBus;
+		this.dispatcher = dispatcher;
+		this.view = view;
+		this.googleSiteMap = siteMap;
+		
+		this.osmSiteMap = new OSMSiteMap(this.eventBus, this.dispatcher);
+
+		TabItem osmMapTabItem = new TabItem(I18N.CONSTANTS.openStreetMap());
+		osmMapTabItem.setLayout(new FitLayout());
+		osmMapTabItem.setEnabled(false);
+		osmMapTabItem.setAutoHeight(true);
+		osmMapTabItem.setEnabled(true);
+		osmMapTabItem.add(this.osmSiteMap);
+		osmMapTabItem.addListener(Events.Select, new Listener<ComponentEvent>() {
+			public void handleEvent(ComponentEvent be) {
+				osmSiteMap.refreshView();
+			}
+		});
+		
+		this.view.getTabPanel().add(osmMapTabItem);
+
+		TabItem googleSiteMapTabItem = new TabItem(I18N.CONSTANTS.googleMaps());
+		googleSiteMapTabItem.setLayout(new FitLayout());
+		googleSiteMapTabItem.setEnabled(false);
+		googleSiteMapTabItem.setAutoHeight(true);
+		googleSiteMapTabItem.setEnabled(true);
+		googleSiteMapTabItem.add(this.googleSiteMap);
+		googleSiteMapTabItem.addListener(Events.Select,new Listener<ComponentEvent>() {
+			public void handleEvent(ComponentEvent be) {
+				googleSiteMap.refreshView();
+			}
+		});
+		
+		this.view.getTabPanel().add(googleSiteMapTabItem);
+	}
+	
+	@Override
+	public void loadProject(ProjectDTO project) {
+		this.project = project;
+		
+		if (project.getMainSite() != null) {
+			mainSiteId = project.getMainSite().getId();
+		}
+
+		Filter filter = new Filter();
+		filter.addRestriction(DimensionType.Database, project.getId());
+		
+		googleSiteMap.setMainSite(this.mainSiteId);
+		googleSiteMap.loadSites(project.getCountry(), filter);
+		
+		osmSiteMap.setMainSite(this.mainSiteId);
+		osmSiteMap.loadSites(project.getCountry(), filter);
+	}
+
+	@Override
+    public Component getView() {
+		return this.view;
+    }
+
+	@Override
+    public void discardView() {
+    	this.view = null;
+    }
+    
+	@Override
+    public void viewDidAppear() {
+    	
+    }
+
+	@Override
+    public boolean hasValueChanged() {
+    	return false;
+    }
+
+	@Override
+    public void forgetAllChangedValues() {
+    }
+}
Index: /src/main/java/org/sigmah/client/page/project/map/MapDisplayView.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/map/MapDisplayView.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/project/map/MapDisplayView.java	(working copy)
@@ -0,0 +1,40 @@
+package org.sigmah.client.page.project.map;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.entry.SiteMap;
+
+import com.extjs.gxt.ui.client.widget.Container;
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.TabPanel;
+import com.extjs.gxt.ui.client.widget.layout.FitLayout;
+
+import org.gwtopenmaps.openlayers.client.MapOptions;
+import org.gwtopenmaps.openlayers.client.MapWidget;
+import org.gwtopenmaps.openlayers.client.layer.OSM;
+import org.gwtopenmaps.openlayers.client.LonLat;
+
+
+public class MapDisplayView extends MapDisplayPresenter.View {
+
+	private TabPanel tabPanel;
+
+	public MapDisplayView() {
+		setLayout(new FitLayout());
+		setHeaderVisible(false);
+		setBorders(true);
+
+		tabPanel = new TabPanel();
+		tabPanel.setPlain(true);
+		add(tabPanel);
+	}
+
+	@Override
+	public ContentPanel getContentPanel() {
+		return this;
+	}
+	
+	@Override
+	public TabPanel getTabPanel() {
+		return tabPanel;
+	}
+}
Index: /src/main/java/org/sigmah/client/page/project/map/ProjectMainSiteForm.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/map/ProjectMainSiteForm.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/project/map/ProjectMainSiteForm.java	(working copy)
@@ -0,0 +1,285 @@
+package org.sigmah.client.page.project.map;
+
+import java.util.HashMap;
+import java.util.Map;
+
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.EventBus;
+import org.sigmah.client.event.SiteEvent;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
+import org.sigmah.client.i18n.UIConstants;
+import org.sigmah.client.page.config.form.ModelFormPanel;
+import org.sigmah.client.page.entry.editor.AdminFieldSetPresenter;
+import org.sigmah.client.page.entry.editor.LocationFieldSet;
+import org.sigmah.client.page.entry.editor.MapFieldSet;
+import org.sigmah.client.page.entry.editor.MapPresenter;
+import org.sigmah.shared.command.CreateEntity;
+import org.sigmah.shared.command.Delete;
+import org.sigmah.shared.command.GetSites;
+import org.sigmah.shared.command.UpdateEntity;
+import org.sigmah.shared.command.result.CommandResult;
+import org.sigmah.shared.command.result.CreateResult;
+import org.sigmah.shared.command.result.SiteResult;
+import org.sigmah.shared.command.result.VoidResult;
+import org.sigmah.shared.dao.Filter;
+import org.sigmah.shared.dto.BoundingBoxDTO;
+import org.sigmah.shared.dto.CountryDTO;
+import org.sigmah.shared.dto.PartnerDTO;
+import org.sigmah.shared.dto.ProjectDTO;
+import org.sigmah.shared.dto.SiteDTO;
+import org.sigmah.shared.report.model.DimensionType;
+
+import com.extjs.gxt.ui.client.Style.Scroll;
+import com.extjs.gxt.ui.client.event.ButtonEvent;
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.widget.button.Button;
+import com.extjs.gxt.ui.client.widget.form.FieldSet;
+import com.extjs.gxt.ui.client.widget.Info;
+import com.extjs.gxt.ui.client.widget.layout.FlowLayout;
+import com.extjs.gxt.ui.client.widget.MessageBox;
+import com.extjs.gxt.ui.client.widget.Status;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+
+/*
+ * Form that Creates / Edits the main location of a project.
+ * The main location is actually a SITE and is referenced in
+ * the dto > ProjectDTO and domain > Project as the mainSite
+ * property. 
+ */
+public class ProjectMainSiteForm extends ModelFormPanel {
+
+	private Dispatcher dispatcher;
+	private EventBus eventBus;
+
+	// Button bar
+	private Status status;
+	private Button saveButton;
+
+	// The map and coordinate fields
+	private MapPresenter.View mapView;
+	private MapPresenter mapPresenter;
+
+	// Admin region
+	private AdminFieldSetPresenter adminPresenter;
+
+	private CountryDTO country;
+	private SiteDTO mainSite;
+	private Integer orgUnitID;
+	private Integer projectDatabaseID;
+	private ProjectDTO currentProject;
+
+	// Properties
+	private Map<String, Object> projectLocationProperties;
+
+	public ProjectMainSiteForm(Dispatcher dispatcher, EventBus eventBus,
+			ProjectDTO currentProject,
+			final AsyncCallback<CommandResult> callback) {
+
+		this.dispatcher = dispatcher;
+		this.eventBus = eventBus;
+		this.currentProject = currentProject;
+		this.country = currentProject.getCountry();
+		this.orgUnitID = currentProject.getOrgUnitId();
+		this.projectDatabaseID = currentProject.getId();
+
+		setHeaderVisible(false);
+		setBodyStyle("padding: 3px");
+		setLayout(new FlowLayout());
+		setScrollMode(Scroll.AUTOY);
+
+		
+		// Status bar with buttons
+
+		status = new Status();
+		status.setWidth(200);
+		getButtonBar().add(status);
+
+		saveButton = new Button(I18N.CONSTANTS.save());
+		saveButton.setIcon(IconImageBundle.ICONS.save());
+		saveButton.addListener(Events.OnClick, new Listener<ButtonEvent>() {
+			public void handleEvent(ButtonEvent be) {
+				manageMainLocation(callback);
+			}
+		});
+
+		addButton(saveButton);
+		
+		// First register all the fields required for the main project location
+
+		// Location
+		LocationFieldSet locationFieldSet = new LocationFieldSet(
+				country.getAdminLevels(), I18N.CONSTANTS.location());
+		add(locationFieldSet);
+
+		adminPresenter = new AdminFieldSetPresenter(dispatcher, country,
+				locationFieldSet);
+		adminPresenter.setListener(new AdminFieldSetPresenter.Listener() {
+			@Override
+			public void onBoundsChanged(String name, BoundingBoxDTO bounds) {
+				mapPresenter.setBounds(name, bounds);
+			}
+
+			@Override
+			public void onModified() {
+			}
+		});
+
+		// Map & Coordinates
+		MapFieldSet mapFieldSet = new MapFieldSet(this.country);
+		this.mapView = mapFieldSet;
+
+		mapPresenter = new MapPresenter(mapView);
+		add((FieldSet) mapView);
+
+		mapPresenter.setBounds(this.country.getName(), this.country.getBounds());
+
+		registerField(((MapFieldSet) mapView).getLngField());
+		registerField(((MapFieldSet) mapView).getLatField());
+		
+		// Register all the fields on the form
+		registerAll();
+	}
+
+	
+	/*
+	 * Loads the main location on the form.
+	 * 
+	 * If the main location has been previously set, we display the existing
+	 * information on the form.
+	 */
+	public void setSite(SiteDTO site) {
+		if (site != null) {
+			this.mainSite = site;
+			adminPresenter.setSite(site);
+			mapPresenter.setSite(site, adminPresenter.getBoundsName(),
+					adminPresenter.getBounds());
+			updateForm(site);
+		}
+	}
+
+	
+	private void manageMainLocation(final AsyncCallback<CommandResult> callback) {
+		if (!this.isValid(false)) {
+			MessageBox.alert(I18N.CONSTANTS.createFormIncomplete(),
+					I18N.MESSAGES.createFormIncompleteDetails(I18N.CONSTANTS
+							.pleaseCompleteForm()), null);
+			return;
+		}
+
+		if (this.mainSite == null) {
+			createMainLocation(callback);
+		} else {
+			updateMainLocation(callback);
+		}
+	}
+
+	
+	/*
+	 * Handles creation of the project location. 
+	 * Create: adds a new entry in the Site table & co, 
+	 * adds the newly created site id to the project table > main_location_id 
+	 */
+	private void createMainLocation(final AsyncCallback<CommandResult> callback) {
+		
+		projectLocationProperties = getAllValues();
+		projectLocationProperties.put("databaseId", projectDatabaseID);
+
+		// Only the partner ID is used for creation, the second string argument
+		// is not relevant in this case. (Check initial design & usage of this 
+		// property for purpose)
+		projectLocationProperties.put("partner", new PartnerDTO(orgUnitID, "partner"));
+
+		dispatcher.execute(new CreateEntity("Site", projectLocationProperties),
+				null, new AsyncCallback<CreateResult>() {
+
+					@Override
+					public void onFailure(Throwable caught) {
+						callback.onFailure(caught);
+					}
+
+					@Override
+					public void onSuccess(CreateResult result) {
+						if (result != null) {
+							final CreateResult siteResult = result;
+							
+							final SiteDTO newSite = new SiteDTO(result.getNewId());
+							newSite.setProperties(projectLocationProperties);
+							
+							// Add the main location site id to the project entity
+							HashMap<String, Object> changes = new HashMap<String, Object>();
+							changes.put("mainSite", result.getNewId());
+
+							dispatcher.execute(new UpdateEntity("Project",
+									currentProject.getId(), changes), null,
+									new AsyncCallback<VoidResult>() {
+										@Override
+										public void onFailure(Throwable caught) {
+
+											// We delete the site created to avoid keeping 
+											// stray main locations in the DB (which are not
+											// known by the project entity).
+											deleteMainLocation(newSite);
+										}
+
+										@Override
+										public void onSuccess(VoidResult result) {
+											Info.display(I18N.CONSTANTS.saved(), I18N.CONSTANTS.saved());
+											eventBus.fireEvent(new SiteEvent(SiteEvent.MAIN_SITE_CREATED, 
+													this, newSite));
+											
+											callback.onSuccess(siteResult);
+										}
+
+									});
+						} else {
+							Throwable t = new Throwable(
+									"ProjectLocation : creation result is null");
+							callback.onFailure(t);
+						}
+					}
+				});
+
+	}
+
+	/*
+	 * Update: updates the info in the Site table & co 
+	 */
+	private void updateMainLocation(final AsyncCallback<CommandResult> callback) {
+		projectLocationProperties = getModified();
+		dispatcher.execute(new UpdateEntity(mainSite, projectLocationProperties),
+				null, new AsyncCallback<VoidResult>() {
+
+					@Override
+					public void onFailure(Throwable caught) {
+						callback.onFailure(caught);
+					}
+
+					@Override
+					public void onSuccess(VoidResult result) {
+						callback.onSuccess(result);
+						Info.display(I18N.CONSTANTS.saved(), I18N.CONSTANTS.saved());
+						mainSite.setProperties(projectLocationProperties);
+						
+						eventBus.fireEvent(new SiteEvent(SiteEvent.MAIN_SITE_UPDATED,
+								this, mainSite));
+					}
+				});
+	}
+	
+	private void deleteMainLocation(final SiteDTO site) {
+        dispatcher.execute(new Delete(site), null,
+        		new AsyncCallback<VoidResult>() {
+
+        	@Override
+            public void onFailure(Throwable caught) {
+            }
+
+            @Override
+            public void onSuccess(VoidResult result) {
+                 eventBus.fireEvent(new SiteEvent(SiteEvent.DELETED, null, site));
+            }
+        });
+	}
+}
Index: /src/main/java/org/sigmah/client/page/project/map/ProjectMapPresenter.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/map/ProjectMapPresenter.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/project/map/ProjectMapPresenter.java	(working copy)
@@ -0,0 +1,176 @@
+package org.sigmah.client.page.project.map;
+
+import java.util.ArrayList;
+
+import org.sigmah.client.EventBus;
+import org.sigmah.client.SigmahInjector;
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.shared.command.GetProject;
+import org.sigmah.shared.command.GetSites;
+import org.sigmah.shared.command.result.CreateResult;
+import org.sigmah.shared.command.result.SiteResult;
+import org.sigmah.shared.dao.Filter;
+import org.sigmah.shared.dto.ProjectDTO;
+import org.sigmah.shared.dto.SiteDTO;
+import org.sigmah.client.event.ProjectEvent;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.project.ProjectPresenter;
+import org.sigmah.client.page.project.ProjectSubPresenter;
+import org.sigmah.client.page.project.SubPresenter;
+import org.sigmah.shared.report.model.DimensionType;
+
+import com.extjs.gxt.ui.client.event.Events;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.Style;
+import com.extjs.gxt.ui.client.util.Margins;
+import com.extjs.gxt.ui.client.widget.Component;
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.layout.BorderLayoutData;
+import com.extjs.gxt.ui.client.widget.layout.FitLayout;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.inject.Inject;
+
+public class ProjectMapPresenter implements ProjectSubPresenter {
+
+	// We still use a view as gxt Component because that's how a SubPresenter is defined
+	public static abstract class View extends ContentPanel {
+		public abstract void addPanelToMainContainer(Component contentPanel,
+				BorderLayoutData layout);
+	}
+	
+	private View view;
+	private final Dispatcher dispatcher;
+	private final EventBus eventBus;
+	private final SigmahInjector injector;
+	private final ProjectPresenter projectPresenter;	
+	
+	private ProjectDTO currentProject;
+	private SiteDTO mainSite;
+	
+	private ProjectSubPresenter[] subPresenters;
+
+	
+	public ProjectMapPresenter(EventBus eventBus, Dispatcher dispatcher,
+			SigmahInjector injector, ProjectPresenter projectPresenter) {
+		this.eventBus = eventBus;
+		this.dispatcher = dispatcher;
+		this.injector = injector;
+		this.projectPresenter = projectPresenter;
+
+		subPresenters = new ProjectSubPresenter[] {
+				injector.getSitesManagementPresenter(),
+				injector.getMapDisplayPresenter() };
+	}
+
+	@Override
+	public void loadProject(final ProjectDTO project) {
+		this.currentProject = project;
+
+		for (ProjectSubPresenter presenter : subPresenters) {
+			presenter.loadProject(currentProject);
+		}
+	}
+
+	@Override
+	public Component getView() {
+		if (view == null) {
+			view = new ProjectMapView();
+			
+			// Add sites management and map display components (views)
+			subPresenters[0].getView().setHeight("100%");
+			subPresenters[1].getView().setHeight("100%");
+
+			BorderLayoutData centerLayout = new BorderLayoutData(Style.LayoutRegion.CENTER);
+			centerLayout.setMargins(new Margins(0, 0, 0, 0));
+			centerLayout.setSplit(true);
+			centerLayout.setCollapsible(true);
+			view.addPanelToMainContainer(subPresenters[0].getView(), centerLayout);
+
+			BorderLayoutData layout = new BorderLayoutData(Style.LayoutRegion.EAST);
+			layout.setSplit(true);
+			layout.setCollapsible(false);
+			layout.setSize(500);
+			layout.setMargins(new Margins(0, 0, 0, 5));
+			view.addPanelToMainContainer(subPresenters[1].getView(), layout);
+		}
+
+		return view;
+	}
+	
+	@Override
+	public void discardView() {
+		this.view = null;
+	}
+
+	@Override
+	public void viewDidAppear() {
+	}
+
+	@Override
+	public boolean hasValueChanged() {
+		return false;
+	}
+
+	@Override
+	public void forgetAllChangedValues() {
+	}
+	
+	
+	/*
+	 * The project information has been changed and we need to
+	 * refresh the view.
+	 * 
+	 * Also fire ProjectEvent.CHANGED.
+	 */
+	public void reload(ProjectDTO project) {
+		dispatcher.execute(new GetProject(project.getId()), 
+				null, 
+				new AsyncCallback<ProjectDTO>() {
+			@Override
+			public void onFailure(Throwable t) {
+			}
+
+			@Override
+			public void onSuccess(ProjectDTO result) {
+				
+				// Announce parent presenter eventually. The only changes to the project 
+				// on this tab involve the project main site which is not relevant anywhere
+				// else atm. Call ProjectPresenter.reload here if it is relevant.
+				
+				loadProject(result);
+				
+				eventBus.fireEvent(new ProjectEvent(ProjectEvent.CHANGED, projectPresenter
+						.getCurrentProjectDTO().getId())); 
+			}	
+		});
+	}
+	
+	private void setMainSite(ProjectDTO project) {
+		if (project.getMainSite() != null) {
+			Filter filter = new Filter();
+			filter.addRestriction(DimensionType.Database, project.getId());
+			filter.addRestriction(DimensionType.Site, project.getMainSite().getId());
+
+			GetSites cmd = new GetSites();
+			cmd.setFilter(filter);
+
+			MaskingAsyncMonitor mask = null;
+			if (view != null) {
+				mask = new MaskingAsyncMonitor(view, I18N.CONSTANTS.loading());
+			}
+
+			dispatcher.execute(cmd, mask, new AsyncCallback<SiteResult>() {
+				@Override
+				public void onFailure(Throwable caught) {
+					mainSite = null;
+				}
+
+				@Override
+				public void onSuccess(SiteResult result) {
+					mainSite = ((ArrayList<SiteDTO>) result.getData()).get(0);
+				}
+			});
+		}
+	}
+}
Index: /src/main/java/org/sigmah/client/page/project/map/ProjectMapView.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/map/ProjectMapView.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/project/map/ProjectMapView.java	(working copy)
@@ -0,0 +1,71 @@
+package org.sigmah.client.page.project.map;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
+
+import com.extjs.gxt.ui.client.Style.HorizontalAlignment;
+import com.extjs.gxt.ui.client.widget.button.Button;
+import com.extjs.gxt.ui.client.widget.Component;
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.LayoutContainer;
+import com.extjs.gxt.ui.client.widget.layout.BorderLayout;
+import com.extjs.gxt.ui.client.widget.layout.BorderLayoutData;
+import com.extjs.gxt.ui.client.widget.toolbar.SeparatorToolItem;
+import com.extjs.gxt.ui.client.widget.toolbar.ToolBar;
+
+import org.sigmah.client.page.config.design.ProjectSiteGridPanel;
+
+
+public class ProjectMapView extends ProjectMapPresenter.View {
+
+    // Toolbar buttons.
+    private Button exportHXL;
+    
+    private ContentPanel mapPanel;
+    private ContentPanel sitesPanel;
+
+    /**
+     * Builds the main panel.
+     * 
+     * @return main panel
+     */
+    public ProjectMapView() {
+		BorderLayout borderLayout = new BorderLayout();
+		borderLayout.setContainerStyle("join-background");
+		setLayout(borderLayout);
+        setHeaderVisible(false);
+        setBorders(true);
+		
+        // Toolbar.
+        final ToolBar toolBar = buildToolbar();
+        setTopComponent(toolBar);
+    }
+    
+    /**
+     * Builds the actions toolbar.
+     * 
+     * @return The actions toolbar.
+     */
+    private ToolBar buildToolbar() {
+
+        // Buttons
+    	
+    	// Add the exportHXL button for issue #630 - HXL export
+    	
+    	/*
+        exportHXL = new Button("Export HXL", IconImageBundle.ICONS.save());
+        exportHXL.setEnabled(false);
+        */
+
+        // Actions toolbar.
+        final ToolBar toolBar = new ToolBar();
+        toolBar.setAlignment(HorizontalAlignment.LEFT);
+        toolBar.setBorders(false);
+		
+        return toolBar;
+    }
+    
+    public void addPanelToMainContainer(Component view, BorderLayoutData layout) {
+    	add(view, layout);
+    }
+}
Index: /src/main/java/org/sigmah/client/page/project/map/SitesManagementPresenter.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/map/SitesManagementPresenter.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/project/map/SitesManagementPresenter.java	(working copy)
@@ -0,0 +1,174 @@
+package org.sigmah.client.page.project.map;
+
+import java.util.ArrayList;
+
+import org.sigmah.client.dispatch.Dispatcher;
+import org.sigmah.client.dispatch.monitor.MaskingAsyncMonitor;
+import org.sigmah.client.EventBus;
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.page.common.toolbar.UIActions;
+import org.sigmah.client.page.config.design.ProjectSiteGridPanel;
+import org.sigmah.client.page.entry.editor.SiteForm;
+import org.sigmah.client.page.entry.editor.SiteFormDialog;
+import org.sigmah.client.page.project.ProjectSubPresenter;
+import org.sigmah.shared.command.GetSites;
+import org.sigmah.shared.command.result.CommandResult;
+import org.sigmah.shared.command.result.SiteResult;
+import org.sigmah.shared.dao.Filter;
+import org.sigmah.shared.dto.ProjectDTO;
+import org.sigmah.shared.dto.SiteDTO;
+import org.sigmah.shared.report.model.DimensionType;
+
+import com.extjs.gxt.ui.client.event.ComponentEvent;
+import com.extjs.gxt.ui.client.event.Listener;
+import com.extjs.gxt.ui.client.widget.Component;
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.layout.FitLayout;
+import com.extjs.gxt.ui.client.widget.Window;
+import com.google.gwt.user.client.rpc.AsyncCallback;
+import com.google.inject.ImplementedBy;
+import com.google.inject.Inject;
+
+
+public class SitesManagementPresenter implements ProjectSubPresenter {
+	
+	/* View managed by this presenter */ 
+	@ImplementedBy(SitesManagementView.class)
+	public static abstract class View extends ContentPanel {
+		public abstract ContentPanel getContentPanel();
+	}
+	
+	private View view;
+	private final Dispatcher dispatcher;
+	private final EventBus eventBus;
+	
+	private ProjectDTO project;
+	private Integer mainSiteId;
+	
+	private final ProjectSiteGridPanel siteEditor;
+	
+	@Inject
+	public SitesManagementPresenter(EventBus eventBus, Dispatcher dispatcher,
+			final View view, ProjectSiteGridPanel siteEditor) {
+		this.eventBus = eventBus;
+		this.dispatcher = dispatcher;
+		this.view = view;
+		this.siteEditor = siteEditor;
+		
+		siteEditor.addActionListener(new Listener<ComponentEvent>() {
+
+			@Override
+			public void handleEvent(ComponentEvent be) {
+				if (UIActions.add.equals(be.getComponent().getItemId())) {
+					addSite();
+				} else if (UIActions.edit.equals(be.getComponent().getItemId())) {
+					editSite();
+				} else if (UIActions.manageMainSite.equals(be.getComponent().getItemId())) {
+					manageMainSite();
+				}
+			}
+		});
+		
+		this.view.add(siteEditor);
+	}
+	
+	@Override
+	public void loadProject(ProjectDTO project) {
+		this.project = project;
+		
+		if (project.getMainSite() != null) {
+			this.mainSiteId = project.getMainSite().getId();		
+		}
+		
+		Filter siteFilter = new Filter();
+		siteFilter.addRestriction(DimensionType.Database, project.getId());
+	
+		siteEditor.load(siteFilter, this.mainSiteId);	
+	}    
+
+	private void addSite() {
+		final int projectId = project.getId();
+		
+		SiteDTO site = new SiteDTO();
+		site.setDatabaseId(projectId);
+		
+		final SiteForm form = new SiteForm(dispatcher, project.getCountry());
+		final SiteFormDialog dialog = new SiteFormDialog(eventBus, dispatcher, form);
+		
+		dialog.create(site);
+	}
+
+	private void editSite() {
+		if (!siteEditor.getSelection().isEmpty()) {
+			SiteDTO site = siteEditor.getSelection().get(0);
+			final SiteForm form = new SiteForm(dispatcher, project.getCountry());
+
+			final SiteFormDialog dialog = new SiteFormDialog(eventBus, dispatcher, form);
+			dialog.edit(site);
+		}
+	}
+	
+	private void manageMainSite() {
+		SiteDTO mainSite = null;
+
+		if (!siteEditor.getSelection().isEmpty()) {
+			mainSite = siteEditor.getSelection().get(0);
+		}
+		
+		int width = 500;
+		int height = 475;
+		String title = I18N.CONSTANTS.projectMainSite();
+		final Window window = new Window();
+		window.setHeading(title);
+		window.setSize(width, height);
+		window.setPlain(true);
+		window.setModal(true);
+		window.setBlinkModal(true);
+		window.setLayout(new FitLayout());
+
+		final ProjectMainSiteForm form = new ProjectMainSiteForm(dispatcher,
+				eventBus, project, new AsyncCallback<CommandResult>() {
+
+					@Override
+					public void onFailure(Throwable t) {
+						window.hide();
+					}
+
+					@Override
+					public void onSuccess(CommandResult result) {
+						window.hide();
+					}
+				});
+
+		// Load the mainSite on the form
+		form.setSite(mainSite);
+		window.add(form);
+		window.show();
+
+	}
+	
+	@Override
+    public Component getView() {
+		return this.view;
+    }
+
+	@Override
+    public void discardView() {
+    	this.view = null;
+    }
+    
+    @Override
+    public void viewDidAppear() {
+    	
+    }
+
+    @Override
+    public boolean hasValueChanged() {
+    	return siteEditor.hasValueChanged();
+    }
+
+    @Override
+    public void forgetAllChangedValues() {
+    	siteEditor.setSiteUpdated(false);
+    }
+}
Index: /src/main/java/org/sigmah/client/page/project/map/SitesManagementView.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/map/SitesManagementView.java	(revision 0)
+++ /src/main/java/org/sigmah/client/page/project/map/SitesManagementView.java	(working copy)
@@ -0,0 +1,25 @@
+package org.sigmah.client.page.project.map;
+
+import org.sigmah.client.i18n.I18N;
+import org.sigmah.client.icon.IconImageBundle;
+import org.sigmah.client.page.config.design.ProjectSiteGridPanel;
+
+import com.extjs.gxt.ui.client.widget.ContentPanel;
+import com.extjs.gxt.ui.client.widget.layout.FitLayout;
+
+
+public class SitesManagementView extends SitesManagementPresenter.View {	
+
+    public SitesManagementView() {	
+        setLayout(new FitLayout());
+        setHeaderVisible(true);
+        setBorders(true);
+        setHeading(I18N.CONSTANTS.projectSitesManagement());
+    }
+    
+    @Override
+    public ContentPanel getContentPanel() {
+        return this;
+    }
+
+}
Index: /src/main/java/org/sigmah/client/page/project/ProjectPresenter.java
===================================================================
--- /src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/project/ProjectPresenter.java	(working copy)
@@ -11,6 +11,7 @@
 
 import org.sigmah.client.AppEvents;
 import org.sigmah.client.EventBus;
+import org.sigmah.client.SigmahInjector;
 import org.sigmah.client.cache.UserLocalCache;
 import org.sigmah.client.dispatch.AsyncMonitor;
 import org.sigmah.client.dispatch.Dispatcher;
@@ -33,6 +34,7 @@
 import org.sigmah.client.page.project.design.ProjectIndicatorsContainer;
 import org.sigmah.client.page.project.details.ProjectDetailsPresenter;
 import org.sigmah.client.page.project.logframe.ProjectLogFramePresenter;
+import org.sigmah.client.page.project.map.ProjectMapPresenter;
 import org.sigmah.client.page.project.pivot.ProjectPivotContainer;
 import org.sigmah.client.page.project.reports.ProjectReportsPresenter;
 import org.sigmah.client.ui.ExportSpreadsheetFormButton;
@@ -59,6 +61,9 @@
 import org.sigmah.shared.dto.layout.LayoutGroupDTO;
 import org.sigmah.shared.dto.profile.ProfileUtils;
 
+
+
+
 import com.allen_sauer.gwt.log.client.Log;
 import com.extjs.gxt.ui.client.Style.Orientation;
 import com.extjs.gxt.ui.client.event.ButtonEvent;
@@ -136,6 +141,7 @@
 
 	private ProjectState currentState;
 	private ToggleAnchor currentTab;
+	 
 	/**
 	 * The current displayed project.
 	 */
@@ -168,8 +174,8 @@
 
 	@Inject
 	public ProjectPresenter(final Dispatcher dispatcher, View view, Authentication authentication,
-	                final EventBus eventBus, final UserLocalCache cache, ProjectIndicatorsContainer projectIndicators,
-	                ProjectPivotContainer pivot) {
+	                final EventBus eventBus, final UserLocalCache cache, final SigmahInjector injector,
+	                ProjectIndicatorsContainer projectIndicators, ProjectPivotContainer pivot) {
 
 		if (MAIN_TABS.isEmpty()) {
 			MAIN_TABS.add(I18N.CONSTANTS.projectTabDashboard());
@@ -178,6 +184,11 @@
 				MAIN_TABS.add(I18N.CONSTANTS.projectTabLogFrame());
 			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_INDICATOR)) {
 				MAIN_TABS.add(I18N.CONSTANTS.projectTabIndicators());
+			}
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_MAPTAB)) {
+				MAIN_TABS.add(I18N.CONSTANTS.projectMap());
+			}
+			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_INDICATOR)) {
 				MAIN_TABS.add(I18N.CONSTANTS.projectTabDataEntry());
 			}
 			if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
@@ -194,13 +205,17 @@
 		// For development.
 		// final DummyPresenter dummyPresenter = new DummyPresenter();
 
-		this.presenters
-		                .add(new ProjectDashboardPresenter(dispatcher, eventBus, authentication, this, cache));
+		this.presenters.add(new ProjectDashboardPresenter(dispatcher, eventBus, authentication, this, cache));
 		this.presenters.add(new ProjectDetailsPresenter(eventBus, dispatcher, authentication, this, cache));
 		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_LOGFRAME))
 			this.presenters.add(new ProjectLogFramePresenter(eventBus, dispatcher, authentication, this));
 		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_INDICATOR)) {
 			this.presenters.add(projectIndicators);
+		}
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_MAPTAB)) {
+			this.presenters.add(new ProjectMapPresenter(eventBus, dispatcher, injector, this));
+		}
+		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_INDICATOR)) {
 			this.presenters.add(pivot);
 		}
 		if (ProfileUtils.isGranted(authentication, GlobalPermissionEnum.VIEW_AGENDA))
@@ -207,6 +222,7 @@
 			this.presenters.add(new ProjectCalendarPresenter(dispatcher, authentication, this));
 		this.presenters.add(new ProjectReportsPresenter(authentication, dispatcher, eventBus, this));
 
+		
 		for (int i = 0; i < MAIN_TABS.size(); i++) {
 			final int index = i;
 
@@ -555,7 +571,7 @@
 			gridLayout.setCellSpacing(0);
 			gridLayout.setWidth("100%");
 			gridLayout.setHeight("100%");
-
+			
 			for (int i = 0; i < gridLayout.getColumnCount() - 1; i++) {
 				gridLayout.getColumnFormatter().setWidth(i, "325px");
 			}
@@ -574,7 +590,9 @@
 
 				gridLayout.setWidget(groupLayout.getRow(), groupLayout.getColumn(), groupPanel);
 
+				// !!!!!!!!!!!!!!!!!
 				if (groupLayout.getLayoutConstraintsDTO() != null) {
+
 					for (final LayoutConstraintDTO constraint : groupLayout.getLayoutConstraintsDTO()) {
 
 						final FlexibleElementDTO element = constraint.getFlexibleElementDTO();
@@ -661,7 +679,6 @@
 		}
 		// Default banner.
 		else {
-
 			panel.setLayout(new FormLayout());
 
 			final LabelField codeField = new LabelField();
Index: /src/main/java/org/sigmah/client/page/table/drilldown/DrillDownEditor.java
===================================================================
--- /src/main/java/org/sigmah/client/page/table/drilldown/DrillDownEditor.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/page/table/drilldown/DrillDownEditor.java	(working copy)
@@ -32,7 +32,7 @@
     private Listener<PivotCellEvent> eventListener;
 
     public DrillDownEditor(EventBus eventBus, Dispatcher service, IStateManager stateMgr, DateUtil dateUtil) {
-    	super(eventBus, service, stateMgr);    	
+    	super(eventBus, service, null, stateMgr);    	
     	this.dateUtil = dateUtil;
 
     	setHeading(I18N.CONSTANTS.drilldown());
Index: /src/main/java/org/sigmah/client/SigmahInjector.java
===================================================================
--- /src/main/java/org/sigmah/client/SigmahInjector.java	(revision 1591)
+++ /src/main/java/org/sigmah/client/SigmahInjector.java	(working copy)
@@ -48,6 +48,8 @@
 import org.sigmah.client.page.project.ProjectModule;
 import org.sigmah.client.page.project.ProjectPageLoader;
 import org.sigmah.client.page.project.ProjectPresenter;
+import org.sigmah.client.page.project.map.SitesManagementPresenter;
+import org.sigmah.client.page.project.map.MapDisplayPresenter;
 import org.sigmah.client.page.report.ReportListPagePresenter;
 import org.sigmah.client.page.report.ReportModule;
 import org.sigmah.client.page.report.ReportPreviewPresenter;
@@ -89,6 +91,10 @@
     // Required by the 'Project' page
     ProjectPresenter getProjectPresenter();
     
+    // Required by the 'Project > Map' page
+    SitesManagementPresenter getSitesManagementPresenter();
+    MapDisplayPresenter getMapDisplayPresenter();
+    
     // Required by the 'Org unit' page
     OrgUnitPresenter getOrgUnitPresenter();
     OrgUnitPageLoader registerOrgUnitPageLoader();
Index: /src/main/java/org/sigmah/public/sigmah.css
===================================================================
--- /src/main/java/org/sigmah/public/sigmah.css	(revision 1591)
+++ /src/main/java/org/sigmah/public/sigmah.css	(working copy)
@@ -863,6 +863,52 @@
 	border-bottom: solid 1px #EDEDED;
 	padding: 5px 0 2px 2px;
 }
+
+/* --------------------------------------------- Project/Map */
+.project-map-tabPanel {
+	background-color: rgb(245, 222, 179);
+}
+
+.project-map-tabPanel .gwt-TabPanelBottom  {
+	height: 100%;
+	width: 100%;
+	border: 2px solid;
+	border-color: rgb(222, 184, 135);
+	background-color: white;
+}
+
+.project-map-tabPanel .gwt-TabBar {
+  	background-color: rgb(245, 222, 179);
+}
+
+.project-map-tabPanel .gwt-TabBarItem  {
+	font-family: tahoma, arial, helvetica, sans-serif;
+	font-size: 13px;
+	border: 2px solid;
+	border-color: rgb(222, 184, 135);
+	border-top-left-radius: 10px;
+	border-top-right-radius: 10px;
+	background-color: rgb(245, 222, 179);
+}
+
+.project-map-tabPanel .gwt-TabBarItem-selected  {
+	font-family: tahoma, arial, helvetica, sans-serif;
+	font-size: 13px;
+	font-weight: bold;
+	border: 2px solid;
+	border-color: rgb(222, 184, 135);
+	border-top-left-radius: 10px;
+	border-top-right-radius: 10px;
+	background-color: rgb(222, 184, 135);
+}
+
+.project-map-Label {
+	font-family: tahoma, arial, helvetica, sans-serif;
+	font-size: 13px;
+	text-align: center;
+	background-color: rgb(245, 222, 179);
+}
+
 /* --------------------------------------------- Reports */
 .project-report {
 	padding-top: 4px;
Index: /src/main/java/org/sigmah/server/policy/ProjectPolicy.java
===================================================================
--- /src/main/java/org/sigmah/server/policy/ProjectPolicy.java	(revision 1591)
+++ /src/main/java/org/sigmah/server/policy/ProjectPolicy.java	(working copy)
@@ -43,6 +43,7 @@
 import org.sigmah.shared.domain.logframe.LogFrameModel;
 import org.sigmah.shared.domain.reminder.MonitoredPointList;
 import org.sigmah.shared.domain.reminder.ReminderList;
+import org.sigmah.shared.domain.Site;
 import org.sigmah.shared.domain.value.Value;
 import org.sigmah.shared.dto.element.BudgetSubFieldDTO;
 
@@ -393,7 +394,6 @@
 
 	@Override
 	public void update(User user, Object entityId, PropertyMap changes) {
-
 		for (Map.Entry<String, Object> entry : changes.entrySet()) {
 
 			if ("fundingId".equals(entry.getKey())) {
@@ -427,8 +427,24 @@
 				em.merge(project);
 				em.remove(projectFunding);
 
-			} else if ("dateDeleted".equals(entry.getKey())) {
+			}
+			
+			else if ("mainSite".equals(entry.getKey())) {
 				// Get the current project
+				Project project = em.find(Project.class, entityId);
+
+				// Get the project main location entity object
+				Site mainLocationSite = em.getReference(Site.class, entry.getValue());
+
+				// Add it to the current project
+				project.setMainSite(mainLocationSite);
+
+				// Save
+				em.merge(project);
+			}
+
+			else if ("dateDeleted".equals(entry.getKey())) {
+				// Get the current project
 				UserDatabase project = em.find(UserDatabase.class, entityId);
 
 				// Mark the project in the state "deleted" (but don't delete it
@@ -447,7 +463,7 @@
 
 					((Project) project).getFunded().clear();
 					((Project) project).getFunding().clear();
-				}
+				} 
 
 				// Save
 				em.merge(project);
Index: /src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java
===================================================================
--- /src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(revision 1591)
+++ /src/main/java/org/sigmah/shared/domain/profile/GlobalPermissionEnum.java	(working copy)
@@ -123,7 +123,29 @@
 	/**
 	 * Show global export button in projects list
 	 */
-	GLOBAL_EXPORT;
+	GLOBAL_EXPORT,
+	
+	/**
+	 * For viewing Project > Map
+	 */
+	VIEW_MAPTAB,
+	
+	/**
+	 * For setting/editing the main location(site)
+	 */
+	MANAGE_MAIN_SITE,
+	
+	/**
+	 * For cretaing/editing sites
+	 */
+	MANAGE_SITES,
+	
+	/**
+	 * For exporting HXL data
+	 */
+	EXPORT_HXL;
+	
+	
 
 	public static String getName(GlobalPermissionEnum gp) {
 		String gpName = "default";
@@ -191,6 +213,18 @@
 		case GLOBAL_EXPORT:
 			gpName = I18N.CONSTANTS.globalExport();
 			break;
+		case VIEW_MAPTAB:
+			gpName = I18N.CONSTANTS.VIEW_MAPTAB();
+			break;
+		case MANAGE_MAIN_SITE:
+			gpName = I18N.CONSTANTS.MANAGE_MAIN_SITE();
+			break;
+		case MANAGE_SITES:
+			gpName = I18N.CONSTANTS.MANAGE_SITES();
+			break;
+		case EXPORT_HXL:
+			gpName = I18N.CONSTANTS.EXPORT_HXL();
+			break;
 
 		default:
 			gpName = null;
Index: /src/main/java/org/sigmah/shared/domain/Project.java
===================================================================
--- /src/main/java/org/sigmah/shared/domain/Project.java	(revision 1591)
+++ /src/main/java/org/sigmah/shared/domain/Project.java	(working copy)
@@ -30,6 +30,7 @@
 import org.sigmah.shared.domain.logframe.LogFrame;
 import org.sigmah.shared.domain.reminder.MonitoredPointList;
 import org.sigmah.shared.domain.reminder.ReminderList;
+import org.sigmah.shared.domain.Site;
 
 @Entity
 public class Project extends UserDatabase {
@@ -52,6 +53,7 @@
 	private Integer amendmentRevision;
 	private User manager;
 	private Integer activityAdvancement;
+	private Site mainSite;
 
 	protected Set<User> favoriteUsers;
 
@@ -286,5 +288,19 @@
 	public void setActivityAdvancement(Integer activityAdvancement) {
 		this.activityAdvancement = activityAdvancement;
 	}
+	
 
+	// Avoid using column name with "location" as the DB contains a location
+	// table which has nothing to do with this siteId.
+	@OneToOne(optional = true, fetch = FetchType.LAZY)
+	@JoinColumn(name = "mainSite", nullable = true)
+	public Site getMainSite() {
+		return mainSite;
+	}
+
+	public void setMainSite(Site site) {
+		this.mainSite = site;
+	}
+	
+
 }
Index: /src/main/java/org/sigmah/shared/dto/ProjectDTO.java
===================================================================
--- /src/main/java/org/sigmah/shared/dto/ProjectDTO.java	(revision 1591)
+++ /src/main/java/org/sigmah/shared/dto/ProjectDTO.java	(working copy)
@@ -19,6 +19,7 @@
 import org.sigmah.shared.dto.reminder.MonitoredPointListDTO;
 import org.sigmah.shared.dto.reminder.ReminderDTO;
 import org.sigmah.shared.dto.reminder.ReminderListDTO;
+import org.sigmah.shared.dto.SiteDTO;
 import org.sigmah.shared.dto.value.ValueDTO;
 
 import com.extjs.gxt.ui.client.data.BaseModelData;
@@ -352,6 +353,7 @@
 	public void setManager(UserDTO manager) {
 		set("manager", manager);
 	}
+	
 
 	public MonitoredPointListDTO getPointsList() {
 		return get("pointsList");
@@ -420,6 +422,15 @@
 	public void setCurrentAmendment(AmendmentDTO currentAmendment) {
 		set("currentAmendment", currentAmendment);
 	}
+	
+	// The project main site
+	public void setMainSite(SiteDTO mainSite) {
+		set("mainSite", mainSite);
+	}
+	
+	public SiteDTO getMainSite() {
+		return get("mainSite");
+	}
 
 	@Override
 	public int getOrgUnitId() {
Index: /src/main/java/org/sigmah/Sigmah.gwt.xml
===================================================================
--- /src/main/java/org/sigmah/Sigmah.gwt.xml	(revision 1591)
+++ /src/main/java/org/sigmah/Sigmah.gwt.xml	(working copy)
@@ -21,6 +21,7 @@
     <inherits name="com.google.gwt.inject.Inject"/>
     <inherits name="com.extjs.gxt.charts.Chart"/>
     <inherits name="com.google.code.gaxb.Annotations"/>
+    <inherits name='org.gwtopenmaps.openlayers.OpenLayers'/>
     
     	<!-- Configure Logging -->
 	<define-property name="log_level" values="TRACE" />
Index: /src/main/resources/org/sigmah/server/bootstrap/SigmahHostController.html
===================================================================
--- /src/main/resources/org/sigmah/server/bootstrap/SigmahHostController.html	(revision 1591)
+++ /src/main/resources/org/sigmah/server/bootstrap/SigmahHostController.html	(working copy)
@@ -60,10 +60,16 @@
     <script type="text/javascript" language="javascript" src="../SigmahAuthToken"></script>
     <script type="text/javascript" language="javascript" src="gxt/flash/swfobject.js"></script>
     <script type="text/javascript" language="javascript">
+    
     	<!--ClientDictionaries-->
     </script>
+    
     <script type="text/javascript" language="javascript" src="Sigmah.nocache.js"></script>
     
+    <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
+	<script src="http://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script>
+	
+    
     <link rel="stylesheet" type="text/css" href="gxt/css/gxt-all.css"/>
     <link rel="stylesheet" type="text/css" href="gxt/themes/sigmah/css/xtheme-sigmah.css"/>
     <link rel="stylesheet" type="text/css" href="activityInfo.css"/>
Index: /pom.xml
===================================================================
--- /pom.xml	(revision 1591)
+++ /pom.xml	(working copy)
@@ -191,6 +191,12 @@
 			</exclusions>
 		</dependency>
 		
+		<dependency>
+  			<groupId>org.gwtopenmaps.openlayers</groupId>
+  			<artifactId>gwt-openlayers-client</artifactId>
+  			<version>1.0</version>
+		</dependency>
+		
 		<!-- Rebar- client persistence -->
 			
 		<dependency>
@@ -218,7 +224,6 @@
 			<scope>test</scope>
 		</dependency>
 
-
 		<!-- Dependency Injection Framework -->		
 		
 		<dependency>
