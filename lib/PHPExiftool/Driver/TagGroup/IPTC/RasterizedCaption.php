<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RasterizedCaption extends AbstractTagGroup
{

  protected string $id = 'IPTC:RasterizedCaption';

  protected string $name = 'RasterizedCaption';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150450
       * type : undef
       * writable : true
       * count : 7360
       * flags : binary
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:RasterizedCaption',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 7360;

  protected int $flags = 2050;

}
