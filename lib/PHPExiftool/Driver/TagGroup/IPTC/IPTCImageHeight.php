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
class IPTCImageHeight extends AbstractTagGroup
{

  protected string $id = 'IPTC:IPTCImageHeight';

  protected string $name = 'IPTCImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151370
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:IPTCImageHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
