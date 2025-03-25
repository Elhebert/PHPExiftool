<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CommentTime extends AbstractTagGroup
{

  protected string $id = 'AIFF:CommentTime';

  protected string $name = 'CommentTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Comment
       * line : 55
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::Comment.AIFF:CommentTime',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
