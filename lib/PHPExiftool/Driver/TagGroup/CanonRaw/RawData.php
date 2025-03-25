<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawData extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:RawData';

  protected string $name = 'RawData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 79966
       * type : ?
       * writable : true
       * count : 
       * flags : binary,permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:RawData',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2054;

}
