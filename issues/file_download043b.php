Lucia Cojocaru 
13-03-2014

Patch for issue #0000599
http://www.sigmah.org/issues/view.php?id=599

Description:
 
- modified files:
	- /src/main/java/org/sigmah/client/ui/ToggleAnchor.java
	- /src/main/java/org/sigmah/client/page/admin/AdminPresenter.java

- ToggleAnchor.java:
	- added a new method that enables styling the current HTML object
	through a string parameter consisting of HTML style attributes;
	- coding-style: added some spacing in the currently existing code;

- AdminPresenter.java
	For the user:
	- added the "go-back-to" behaviour from tab/subtab -> tab
	- graphical enhancement: currently selected tab is highlighted
	by its background; clickable tabs are hyperlinks;
	(see attached demo.png)


	Important Note!
	The changes described below do not change the way navigation is
	performed between these tabs. They focus on how the visual content
	of the Administration pages is updated so as to properly reflect 
	the navigation events, which are essentially correct (well-supported). 


	Details:
	1. segregated the two main roles of the old selectTabs function:
		-> updating the navigation panel;
		-> loading the main view;
	
		- reasons: -> adding the "go-back-to" functionality and fixing the
		navigation between top-level tabs bug implied treating several
		particular cases, mostly for handling distinct visual updates.
		The previous method, selectTabs, did not provide sufficient 
		flexibility to manage these changes and keeping it would have
		severly burdened the code.
			-> clearer context, easier to use: distinct visual
		content (the navigation tab and the main view) are handled
		separately, checks now performed by respective functions.
	
		
	2. method private void setCurrentView();
		-> handles a request to update the content of the main panel
		-> integrated checking if there is need for a content update
		(programmer should not trouble himself with this check anymore);

	3. method private void refreshNavigationPanel(boolean enableBack);
		-> updates/refreshes the navigation panel;
		-> provides graphical support for showing the currently selected tab
		-> boolean enableBack: provides the option to make the currently
		selected tab a hyperlink (for the go-back-to feature)

	4. added class field private AdminPageState oldState;
		-> required for checking if the requested navigation is of type
		"go-back-to" and for updating the visual content;
		-> several occurences in the code

		- reason: the navigation system, as is, does not care where we are
		coming from, but where we are heading. Yet this information is needed 
		to distinguish between different forms of navigation in order to deal
		with the visual updates they require;

		