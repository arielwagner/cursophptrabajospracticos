// ***********************************************************************
// *** Mi sello digital de desarrollo en Flash...
// *** Job Systems Solutions
// ***********************************************************************
stop();

import flash.display.MovieClip;
import flash.events.ContextMenuEvent;
import flash.ui.ContextMenu;
import flash.ui.ContextMenuItem;
import flash.net.navigateToURL;
import flash.net.URLRequest;

var myMenu:ContextMenu = new ContextMenu();
var item1:ContextMenuItem = new ContextMenuItem("Desarrollado por Job Systems Solutions");
var item2:ContextMenuItem = new ContextMenuItem("E-Mail arielwagner@hotmail.com");
var item3:ContextMenuItem = new ContextMenuItem("Soluciones Informáticas a medida - © 2010");
myMenu.hideBuiltInItems();
myMenu.customItems.push(item1, item2, item3);
this.contextMenu = myMenu;
// Escríbame un correo ahora mismo...
item2.addEventListener(ContextMenuEvent.MENU_ITEM_SELECT, onClickItem2);
function onClickItem2(event:ContextMenuEvent):void {
	var RqURL:String = new String("mailto:arielwagner@hotmail.com?subject=Consulta");
	var URLWeb:URLRequest = new URLRequest;
	URLWeb.url = RqURL;
	navigateToURL(URLWeb,"_blank");
}