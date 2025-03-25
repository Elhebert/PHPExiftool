<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReplayGainAlbumGain extends AbstractTagGroup
{

  protected string $id = 'Vorbis:ReplayGainAlbumGain';

  protected string $name = 'ReplayGainAlbumGain';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Vorbis::Comments
       * line : 395858
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Vorbis::Comments.Vorbis:ReplayGainAlbumGain',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
