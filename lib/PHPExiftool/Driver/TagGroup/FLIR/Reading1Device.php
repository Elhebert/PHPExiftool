<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Reading1Device extends AbstractTagGroup
{

  protected string $id = 'FLIR:Reading1Device';

  protected string $name = 'Reading1Device';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MeterLink
       * line : 123311
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'FLIR::MeterLink.FLIR:Reading1Device',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 16;

}
