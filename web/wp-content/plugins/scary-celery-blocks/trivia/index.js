import { registerBlockType } from '@wordpress/blocks';
import Edit from './_Edit';
import Save from './_Save';
import metadata from './block.json';
import './trivia.scss';
registerBlockType('scary-celery-blocks/trivia', {
  ...metadata,
  edit: Edit,
  save: Save,
  supports: {
    color: {
      gradients: false,
      text: true,
      background: true,
    }
  },
  attributes: {
    backgroundColor: {
      type: 'string',
      default: 'other-green-light',
    },
  },
});
