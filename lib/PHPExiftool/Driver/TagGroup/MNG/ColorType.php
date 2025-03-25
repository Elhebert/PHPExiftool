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
class ColorType extends AbstractTagGroup
{

  protected string $id = 'MNG:ColorType';

  protected string $name = 'ColorType';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::BasisObject
       * line : 164569
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::BasisObject.MNG:ColorType',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MNG::JNGHeader
       * line : 164902
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::JNGHeader.MNG:ColorType',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
