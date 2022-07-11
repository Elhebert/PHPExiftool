<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ArtworkDateCreated extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:ArtworkDateCreated';

  protected string $name = 'ArtworkDateCreated';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Artwork Date Created',
    'fr' => 'Date de création de l\'Illustration',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409460
       * type : date
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:ArtworkDateCreated',
      'desc' => [
        'en' => 'Artwork Date Created',
        'fr' => 'Date de création de l\'Illustration',
      ],
    ],
  ];

}
