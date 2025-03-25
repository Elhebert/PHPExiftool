<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{

  protected string $id = 'Pentax:PreviewImage';

  protected string $name = 'PreviewImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::PENT
       * line : 301499
       * type : undef
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::PENT.Pentax:PreviewImage',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::PXTH
       * line : 301527
       * type : undef
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Pentax::PXTH.Pentax:PreviewImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
