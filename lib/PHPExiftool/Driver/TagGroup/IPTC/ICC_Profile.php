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
class ICC_Profile extends AbstractTagGroup
{

  protected string $id = 'IPTC:ICC_Profile';

  protected string $name = 'ICC_Profile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151586
       * type : ?
       * writable : true
       * count : 
       * flags : binary
       */
      'id' => 'IPTC::NewsPhoto.IPTC:ICC_Profile',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2050;

}
