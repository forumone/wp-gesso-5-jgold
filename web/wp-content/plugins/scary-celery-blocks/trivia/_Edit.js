import {
  useBlockProps,
  InnerBlocks
 } from '@wordpress/block-editor';
function Edit() {
  const blockProps = useBlockProps({
    className: 'trivia l-constrain',
  });
  return (<div {...blockProps}>
    <InnerBlocks
    template={[
      [
        'core/heading',
        { level: 3,
          content: 'Trivia',
          className: 'is-style-no-max-width has-text-color has-grayscale-white-color',
        },
      ],
      [
        'core/list',
        {}
      ],
    ]}
    templateLock="all" />
  </div>);
}
export default Edit;
