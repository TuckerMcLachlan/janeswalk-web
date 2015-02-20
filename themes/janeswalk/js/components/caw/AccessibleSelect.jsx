'use strict';

var mixins = require('../functions/mixins.jsx');

var AccessibleSelect = React.createClass({
  displayName: 'AccessibleSelect',

  mixins: [mixins.linkedParentState],

  render: function() {
    var _this = this;
    var t = this.props.i18n.translate.bind(this.props.i18n);
    var options = [
      {id: 'accessible-familyfriendly', name: t('Family friendly')},
      {id: 'accessible-wheelchair', name: t('Wheelchair accessible')},
      {id: 'accessible-dogs', name: t('Dogs welcome')},
      {id: 'accessible-strollers', name: t('Strollers welcome')},
      {id: 'accessible-bicycles', name: t('Bicycles welcome')},
      {id: 'accessible-steephills', name: t('Steep hills')},
      {id: 'accessible-uneven', name: t('Wear sensible shoes (uneven terrain)')},
      {id: 'accessible-busy', name: t('Busy sidewalks')},
      {id: 'accessible-bicyclesonly', name: t('Bicycles only')},
      {id: 'accessible-lowlight', name: t('Low light or nighttime')},
      {id: 'accessible-seniors', name: t('Senior Friendly')}
    ];

    return (
      <fieldset id="accessibilities">
        <legend className="required-legend">{ t('How accessible is this walk?') }</legend>
        <fieldset>
          {options.map(function(option) {
            return (
              <label className="checkbox">
                <input type="checkbox" checkedLink={_this.linkParentState(option.id)} />{option.name}
              </label>
              );
          })}
        </fieldset>
      </fieldset>
    );
  }
});

module.exports = AccessibleSelect;
