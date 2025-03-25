<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XMLDocumentText extends AbstractTagGroup
{

  protected string $id = 'MXF:XMLDocumentText';

  protected string $name = 'XMLDocumentText';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171104
       * type : ?
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'MXF::Main.MXF:XMLDocumentText',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171107
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:XMLDocumentText',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : MXF::Main
       * line : 171110
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:XMLDocumentText',
      'desc' => [
      ],
    ],
    3 => [
      /**
       * table_name : MXF::Main
       * line : 171113
       * type : ?
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'MXF::Main.MXF:XMLDocumentText',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
