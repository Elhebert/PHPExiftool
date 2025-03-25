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
class CoyoteSense extends AbstractTagGroup
{

  protected string $id = 'GoPro:CoyoteSense';

  protected string $name = 'CoyoteSense';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GPMF
       * line : 139427
       * type : ?
       * writable : false
       * count : 
       * flags : binary
       */
      'id' => 'GoPro::GPMF.GoPro:CoyoteSense',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2;

}
