<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MD5Signature extends AbstractTagGroup
{

  protected string $id = 'FLAC:MD5Signature';

  protected string $name = 'MD5Signature';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLAC::StreamInfo
       * line : 121984
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLAC::StreamInfo.FLAC:MD5Signature',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
