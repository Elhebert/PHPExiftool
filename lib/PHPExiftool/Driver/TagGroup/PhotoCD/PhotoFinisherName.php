<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PhotoFinisherName extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:PhotoFinisherName';

  protected string $name = 'PhotoFinisherName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 303821
       * type : string
       * writable : false
       * count : 60
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:PhotoFinisherName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 60;

}
