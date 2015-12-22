/**
 * TextArea with wordprocessor-like editing
 */
export default class TinyMCE extends React.Component {
  // Initialize other libraries here
  componentDidMount() {
    // tinyMCE will leave applying to textarea to the components
    tinyMCE.init({
      mode : 'none',
      theme : 'advanced',
      theme_advanced_toolbar_location : 'top',
      theme_advanced_toolbar_align : 'left',
      theme_advanced_buttons1 : 'bold,italic,underline,separator,bullist,numlist',
      theme_advanced_buttons2 : '',
      theme_advanced_buttons3 : '',
      width: '100%'
    });
    tinyMCE.execCommand('mceAddControl', true, React.findDOMNode(this).id);
  }

  render() {
    const id = this.props.id || ('mce' + this._rootNodeID);
    return <textarea key={id} id={id} {...this.props} />;
  }
}
