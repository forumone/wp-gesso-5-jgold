import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
function Save() {
  const blockProps = useBlockProps.save({
    className: 'trivia l-constrain',
  });
  return (<div {...blockProps}>
    <InnerBlocks.Content />
  </div>);
}
export default Save;
