<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\VCard;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Photo extends AbstractTagGroup
{

  protected string $id = 'VCard:Photo';

  protected string $name = 'Photo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : VCard::Main
       * line : 395171
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'VCard::Main.VCard:Photo',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
