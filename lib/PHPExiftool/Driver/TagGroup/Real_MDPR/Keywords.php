<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Keywords extends AbstractTagGroup
{

  protected string $id = 'Real-MDPR:Keywords';

  protected string $name = 'Keywords';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Keywords',
    'fr' => 'Mots-clés',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::FileInfo
       * line : 330656
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::FileInfo.Real-MDPR:Keywords',
      'desc' => [
        'en' => 'Keywords',
        'fr' => 'Mots-clés',
      ],
    ],
  ];

}
