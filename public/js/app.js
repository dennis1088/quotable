window.App = Ember.Application.create();

App.Store = DS.Store.extend({
	revision: 12,
	adapter: 'DS.FixtureAdapter'
	/*adapter: DS.RESTAdapter.extend({
		namespace: 'quotable/public'
	})*/
});

App.Router.map(function() {
  // put your routes here
});

App.IndexRoute = Ember.Route.extend({
  model: function() {
    return App.Quote.find();
  }
});

App.Quote = DS.Model.extend({
	statement: DS.attr('string'),
	author: DS.attr('string'),
	createdAt: DS.attr('date'),
	updatedAt: DS.attr('date')
});

App.Quote.FIXTURES = [{
	id: 1,
	statement: "By preparing to fail, you are failing to prepare",
	author: "Benjamin Franklin",
	created_at: new Date(),
	updated_at: new Date()
}, {
	id: 2,
	statement: "Any fool can criticize, condemn, and complain, and most fools do",
	author: "Benjamin Franklin",
	created_at: new Date(),
	updated_at: new Date()
}, {
	id: 3,
	statement: "Three can keep a secret, if two of them are dead",
	author: "Benjamin Franklin",
	created_at: new Date(),
	updated_at: new Date()
}
];
