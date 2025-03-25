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
class DigitalFilter02 extends AbstractTagGroup
{

  protected string $id = 'Pentax:DigitalFilter02';

  protected string $name = 'DigitalFilter02';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::FilterInfo
       * line : 286030
       * type : undef
       * writable : true
       * count : 17
       * flags : permanent
       */
      'id' => 'Pentax::FilterInfo.Pentax:DigitalFilter02',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 17;

  protected int $flags = 2052;

}
