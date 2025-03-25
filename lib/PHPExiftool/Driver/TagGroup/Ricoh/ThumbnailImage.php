<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTagGroup
{

  protected string $id = 'Ricoh:ThumbnailImage';

  protected string $name = 'ThumbnailImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::AVI
       * line : 331799
       * type : ?
       * writable : false
       * count : 
       * flags : binary,permanent
       */
      'id' => 'Ricoh::AVI.Ricoh:ThumbnailImage',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 6;

}
