<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirstObject extends AbstractTagGroup
{

  protected string $id = 'MNG:FirstObject';

  protected string $name = 'FirstObject';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::ClipObjects
       * line : 164676
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::ClipObjects.MNG:FirstObject',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MNG::MoveObjects
       * line : 165228
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::MoveObjects.MNG:FirstObject',
      'desc' => [
      ],
    ],
    2 => [
      /**
       * table_name : MNG::ShowObjects
       * line : 165381
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::ShowObjects.MNG:FirstObject',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
