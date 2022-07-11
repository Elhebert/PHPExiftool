<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetouchAreaSeed extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:RetouchAreaSeed';

  protected string $name = 'RetouchAreaSeed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Seed',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 401300
       * type : integer
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::crd.XMP-crd:RetouchAreaSeed',
      'desc' => [
        'en' => 'Retouch Area Seed',
      ],
    ],
  ];

}
