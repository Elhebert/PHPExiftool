<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SerialNumber extends AbstractTagGroup
{

  protected string $id = 'GoPro:SerialNumber';

  protected string $name = 'SerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::fdsc
       * line : 140069
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'GoPro::fdsc.GoPro:SerialNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

}
