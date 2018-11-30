/*
@license
dhtmlxScheduler v.5.0.0 Professional

This software can be used only as part of dhtmlx.com site.
You are not allowed to use it on any other site

(c) Dinamenta, UAB.


*/
Scheduler.plugin(function(e){!function(){e.config.all_timed="short",e.config.all_timed_month=!1;var t=function(e){return!((e.end_date-e.start_date)/36e5>=24)};e._safe_copy=function(t){var a=null,i=e._copy_event(t);return t.event_pid&&(a=e.getEvent(t.event_pid)),a&&a.isPrototypeOf(t)&&(delete i.event_length,delete i.event_pid,delete i.rec_pattern,delete i.rec_type),i};var a=e._pre_render_events_line,i=e._pre_render_events_table,r=function(e,t){return this._table_view?i.call(this,e,t):a.call(this,e,t);
};e._pre_render_events_line=e._pre_render_events_table=function(a,i){function n(e){var t=s(e.start_date);return+e.end_date>+t}function s(t){var a=e.date.add(t,1,"day");return a=e.date.date_part(a)}function o(t,a){var i=e.date.date_part(new Date(t));return i.setHours(a),i}if(!this.config.all_timed||this._table_view&&"month"!=this._mode||"month"==this._mode&&!this.config.all_timed_month)return r.call(this,a,i);for(var d=0;d<a.length;d++){var l=a[d];if(!l._timed)if("short"!=this.config.all_timed||t(l)){
var _=this._safe_copy(l);_.start_date=new Date(_.start_date),n(l)?(_.end_date=s(_.start_date),24!=this.config.last_hour&&(_.end_date=o(_.start_date,this.config.last_hour))):_.end_date=new Date(l.end_date);var c=!1;_.start_date<this._max_date&&_.end_date>this._min_date&&_.start_date<_.end_date&&(a[d]=_,c=!0);var h=this._safe_copy(l);if(h.end_date=new Date(h.end_date),h.start_date<this._min_date?h.start_date=o(this._min_date,this.config.first_hour):h.start_date=o(s(l.start_date),this.config.first_hour),
h.start_date<this._max_date&&h.start_date<h.end_date){if(!c){a[d--]=h;continue}a.splice(d+1,0,h)}}else"month"!=this._mode&&a.splice(d--,1)}var u="move"==this._drag_mode?!1:i;return r.call(this,a,u)};var n=e.get_visible_events;e.get_visible_events=function(e){return this.config.all_timed&&this.config.multi_day?n.call(this,!1):n.call(this,e)},e.attachEvent("onBeforeViewChange",function(t,a,i,r){return e._allow_dnd="day"==i||"week"==i,!0}),e._is_main_area_event=function(e){return!!(e._timed||this.config.all_timed===!0||"short"==this.config.all_timed&&t(e));
};var s=e.updateEvent;e.updateEvent=function(t){var a,i,r=e.getEvent(t);r&&(a=e.config.all_timed&&!(e.isOneDayEvent(e._events[t])||e.getState().drag_id),a&&(i=e.config.update_render,e.config.update_render=!0)),s.apply(e,arguments),r&&a&&(e.config.update_render=i)}}()});
//# sourceMappingURL=../sources/ext/dhtmlxscheduler_all_timed.js.map